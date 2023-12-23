<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreOrderPayRequest;

class OrderController extends Controller
{
    public function pay(StoreOrderPayRequest $request)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = config('midtrans.is3ds');

        $unit = Unit::findOrFail($request->unit_id);
        $price = Price::where('type', $request->bookingType)->firstOrFail()->price;
    
        $order = Order::create([
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'invoice_code' => 'ORDER-'.mt_rand(100000, 999999),
            'qty' => $request->quantity,
            'unit_name_snapshot' => $unit->nama_unit,
            'type' => $request->bookingType,
            'price' => $price,
            'total_price' => $price * $request->quantity,
            'user_id' => Auth::user()->id,
            'unit_id' => $unit->id,
            'start_date' => $request->startDate,
            'end_date' => $request->endDate,
        ]);

        $params = [
            'transaction_details' => [
                'order_id'     => $order->invoice_code,
                'gross_amount' => $order->total_price,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email'      => Auth::user()->email,
                'phone'      => $order->phone,
            ],
            'item_details' => [
                [
                    'id'            => $order->invoice_code,
                    'price'         => $order->price,
                    'quantity'      => $order->qty,
                    'name'          => $order->unit_name_snapshot . ' (' . $order->type .')',
                ],
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $order->snap_token = $snapToken;
        $order->save();
        
        return view('detailbooking', compact('snapToken', 'order'));

    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.serverKey');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);

        if($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                Order::where('invoice_code', $request->order_id)->update([
                    'status' => 2,
                ]);
            } else if($request->transaction_status == 'cancel') {
                Order::where('invoice_code', $request->order_id)->update([
                    'status' => 3,
                ]);
            } else if($request->transaction_status == 'expire') {
                Order::where('invoice_code', $request->order_id)->update([
                    'status' => 4,
                ]);
            }

        } else {
            abort(403, 'Gagal, signature key tidak terverifikasi');
        }
    }
}
