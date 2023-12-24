<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreOrderPayRequest;
use Yajra\DataTables\Facades\DataTables;

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
            'invoice_code' => 'ORDER-'.time().mt_rand(1000, 9999),
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
                    'status' => '2',
                ]);
            } else if($request->transaction_status == 'cancel') {
                Order::where('invoice_code', $request->order_id)->update([
                    'status' => '3',
                ]);
            } else if($request->transaction_status == 'expire') {
                Order::where('invoice_code', $request->order_id)->update([
                    'status' => '4',
                ]);
            }

        } else {
            abort(403, 'Gagal, signature key tidak terverifikasi');
        }
    }

    public function historyOrderUser()
    {
        if (request()->ajax()) {

            $order = Order::where('user_id', Auth::user()->id)->get();
            return DataTables::of($order)
            ->addIndexColumn()
            ->addColumn('status', function($item) {
                if ($item->status == '1') {
                    $html = '<span class="badge badge-sm bg-gradient-secondary">PENDING</span>';
                } else if ($item->status == '2') {
                    $html = '<span class="badge badge-sm bg-gradient-success">SUKSES</span>';
                } else if ($item->status == '3') {
                    $html = '<span class="badge  badge-sm bg-gradient-danger">EXPIRED</span>';
                } else if ($item->status == '4') {
                    $html = '<span class="badge  badge-sm bg-gradient-danger">BATAL</span>';
                } else {
                    $html = '<span class="badge  badge-sm bg-gradient-danger">GAGAL</span>';
                }

                return $html;
            })
            ->addColumn('created_at', function($item) {
                return date('d M Y H:i', strtotime($item->created_at));
            })
            ->addColumn('action', function ($item) {
                $button =  $item->status == "2" ? 
                '<a class="btn btn-secondary" href="'. Route('order.invoice', $item->invoice_code) .'">
                    <i class="ni ni-single-copy-04"></i>
                </a>' : '';
                $button .=   '<a class="btn btn-primary" href="'. Route('order.detail', $item->invoice_code) .'">
                                Detail
                            </a>';
                return $button;
            })
            ->rawColumns(['status', 'action'])
            ->make();
        }

        return view('user.riwayatuser.index');
    }

    public function historyOrderUserDetail(String $invoice_code)
    {
        $order = Order::where('invoice_code', $invoice_code)->firstOrFail();

        if ($order->user_id != Auth::user()->id) {
            abort('404');
        }

        $user = DB::table('users')->select('name', 'email')->where('id', $order->user_id)->first();

        $typeTranslate = [
            'day' => 'Hari',
            'week' => 'Minggu',
            'month' => 'Bulan',
            'year' => 'Tahun',
        ];

        $statusTranslate = [
            '1' => '<span class="badge badge-sm bg-gradient-secondary">PENDING</span>',
            '2' => '<span class="badge badge-sm bg-gradient-success">SUKSES</span>',
            '3' => '<span class="badge  badge-sm bg-gradient-danger">EXPIRED</span>',
            '4' => '<span class="badge  badge-sm bg-gradient-danger">BATAL</span>',
        ];

        return view('user.riwayatuser.detail', compact('order', 'typeTranslate', 'statusTranslate', 'user'));
    }

    public function historyOrder()
    {
        if (request()->ajax()) {

            $order = Order::query();
            return DataTables::of($order)
            ->addIndexColumn()
            ->addColumn('status', function($item) {
                if ($item->status == '1') {
                    $html = '<span class="badge badge-sm bg-gradient-secondary">PENDING</span>';
                } else if ($item->status == '2') {
                    $html = '<span class="badge badge-sm bg-gradient-success">SUKSES</span>';
                } else if ($item->status == '3') {
                    $html = '<span class="badge  badge-sm bg-gradient-danger">EXPIRED</span>';
                } else if ($item->status == '4') {
                    $html = '<span class="badge  badge-sm bg-gradient-danger">BATAL</span>';
                } else {
                    $html = '<span class="badge  badge-sm bg-gradient-danger">GAGAL</span>';
                }

                return $html;
            })
            ->addColumn('created_at', function($item) {
                return date('d M Y H:i', strtotime($item->created_at));
            })
            ->addColumn('action', function ($item) {
                $button =  $item->status == "2" ? 
                        '<a class="btn btn-secondary" href="'. Route('order.invoice', $item->invoice_code) .'">
                            <i class="ni ni-single-copy-04"></i>
                        </a>' : '';
                $button .=  '<a class="btn btn-success" href="https://wa.me/'.$item->phone.'" target="_blank">
                                <i class="ni ni-chat-round"></i>
                            </a>
                            <a class="btn btn-primary" href="'. Route('order.detailadmin', $item->invoice_code) .'">
                                Detail
                            </a>';
                return $button;
            })
            ->rawColumns(['status', 'action'])
            ->make();
        }

        return view('admin.riwayatadmin.index');
    }

    public function historyOrderDetail(String $invoice_code)
    {
        $order = Order::where('invoice_code', $invoice_code)->firstOrFail();

        $user = DB::table('users')->select('name', 'email')->where('id', $order->user_id)->first();

        $typeTranslate = [
            'day' => 'Hari',
            'week' => 'Minggu',
            'month' => 'Bulan',
            'year' => 'Tahun',
        ];

        $statusTranslate = [
            '1' => '<span class="badge badge-sm bg-gradient-secondary">PENDING</span>',
            '2' => '<span class="badge badge-sm bg-gradient-success">SUKSES</span>',
            '3' => '<span class="badge  badge-sm bg-gradient-danger">EXPIRED</span>',
            '4' => '<span class="badge  badge-sm bg-gradient-danger">BATAL</span>',
        ];

        return view('admin.riwayatadmin.detail', compact('order', 'typeTranslate', 'statusTranslate', 'user'));
    }

    public function invoice(String $invoice_code)
    {
        $order = Order::where('invoice_code', $invoice_code)->firstOrFail();

        if ($order->status != '2') {
            abort('404');
        }

        if (Auth::user()->role == 'user') {
            if ($order->user_id != Auth::user()->id) {
                abort('404');
            }
        }

        $user = DB::table('users')->select('name', 'email')->where('id', $order->user_id)->first();

        $typeTranslate = [
            'day' => 'Hari',
            'week' => 'Minggu',
            'month' => 'Bulan',
            'year' => 'Tahun',
        ];

        return view('admin.riwayatadmin.nota', compact('user', 'order', 'typeTranslate'));
    }
}
