<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function pay(Request $request)
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
}
