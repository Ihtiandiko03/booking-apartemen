<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Order;
use App\Models\Refund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class RefundController extends Controller
{
    public function historyRefundUser()
    {
        if (request()->ajax()) {
            $refund = Refund::where('refunds.user_id', Auth::user()->id)
                    ->join('orders', 'refunds.order_id', '=', 'orders.id')
                    ->select('refunds.*', 'orders.unit_name_snapshot', 'orders.customer_name', 'orders.invoice_code')
                    ->get();

            return DataTables::of($refund)
            ->addIndexColumn()
            ->addColumn('status', function($item) {
                if ($item->status == 'accept') {
                    $html = '<span class="badge badge-sm bg-gradient-success">DITERIMA</span>';
                } else if ($item->status == 'waiting') {
                    $html = '<span class="badge badge-sm bg-gradient-secondary">MENUNGGU</span>';
                } else if ($item->status == 'reject') {
                    $html = '<span class="badge  badge-sm bg-gradient-danger">DITOLAK</span>';
                } else {
                    $html = '';
                }

                return $html;
            })
            ->addColumn('created_at', function($item) {
                return date('d M Y H:i', strtotime($item->created_at));
            })
            ->addColumn('action', function ($item) {
                $button =   '<a class="btn btn-primary" href="'. Route('refund.detailhistoryuser', $item->id) .'">
                                Detail
                            </a>';
                return $button;
            })
            ->rawColumns(['status', 'action'])
            ->make();
        }

        return view('user.refund.index');
    }

    public function historyDetailRefundUser(string $id)
    {
        $refund = Refund::findOrFail($id);
        $order = $refund->order;
        if ($refund->user_id != Auth::user()->id) {
            return redirect(route('refund.historyuser'));
        }

        $user = DB::table('users')->select('name', 'email')->where('id', $order->user_id)->first();

        $typeTranslate = [
            'day' => 'Hari',
            'week' => 'Minggu',
            'month' => 'Bulan',
            'year' => 'Tahun',
        ];

        $statusRefundTranslate = [
            'accept' => '<span class="badge badge-sm bg-gradient-success">DITERIMA</span>',
            'waiting' => '<span class="badge badge-sm bg-gradient-secondary">MENUNGGU</span>',
            'reject' => '<span class="badge badge-sm bg-gradient-danger">DITOLAK</span>',
        ];

        return view('user.refund.detail', compact('refund', 'user', 'typeTranslate', 'statusRefundTranslate', 'order'));
    }

    public function historyRefund()
    {
        if (request()->ajax()) {
            $refund = Refund::join('orders', 'refunds.order_id', '=', 'orders.id')
            ->select('refunds.*', 'orders.unit_name_snapshot', 'orders.customer_name', 'orders.invoice_code')
            ->get();
            return DataTables::of($refund)
            ->addIndexColumn()
            ->addColumn('status', function($item) {
                if ($item->status == 'accept') {
                    $html = '<span class="badge badge-sm bg-gradient-success">DITERIMA</span>';
                } else if ($item->status == 'waiting') {
                    $html = '<span class="badge badge-sm bg-gradient-secondary">MENUNGGU</span>';
                } else if ($item->status == 'reject') {
                    $html = '<span class="badge  badge-sm bg-gradient-danger">DITOLAK</span>';
                } else {
                    $html = '';
                }

                return $html;
            })
            ->addColumn('created_at', function($item) {
                return date('d M Y H:i', strtotime($item->created_at));
            })
            ->addColumn('action', function ($item) {
                $button =   '<a class="btn btn-primary" href="'. Route('refund.detailhistory', $item->id) .'">
                                Detail
                            </a>';
                return $button;
            })
            ->rawColumns(['status', 'action'])
            ->make();
        }

        return view('admin.refund.index');
    }

    public function historyDetailRefund(string $id)
    {
        $refund = Refund::findOrFail($id);

        $order = $refund->order;

        $user = DB::table('users')->select('name', 'email')->where('id', $order->user_id)->first();

        $typeTranslate = [
            'day' => 'Hari',
            'week' => 'Minggu',
            'month' => 'Bulan',
            'year' => 'Tahun',
        ];

        $statusRefundTranslate = [
            'accept' => '<span class="badge badge-sm bg-gradient-success">DITERIMA</span>',
            'waiting' => '<span class="badge badge-sm bg-gradient-secondary">MENUNGGU</span>',
            'reject' => '<span class="badge badge-sm bg-gradient-danger">DITOLAK</span>',
        ];

        return view('admin.refund.detail', compact('refund', 'user', 'typeTranslate', 'statusRefundTranslate', 'order'));
    }

    public function addRefund(Request $request, string $orderId)
    {
        $order = Order::findOrFail($orderId);

        if ($order->user_id != Auth::user()->id) {
            return redirect(route('refund.historyuser'));
        }
        
        if ($order->is_refund == 1) {
            Alert::warning('Gagal', 'Terjadi kesalahan, sudah pernah diajukan refund');
            return redirect(route('refund.detail'));
        }

        $refund = Refund::create([
            'reason' => $request->reason,
            'order_id' => $order->id,
            'user_id' => $order->user_id,
        ]);

        $order->is_already_refund = 1;
        $order->save();

        if ($refund) {
            Alert::success('Sukses', 'Refund berhasil diajukan, silahkan tunggu sampai refund disetujui admin');
            return redirect(route('order.detail', $order->invoice_code));
        } else {
            Alert::warning('Gagal', 'Terjadi kesalahan');
            return redirect(route('order.detail', $order->invoice_code));
        }

    } 

    public function refundAgreement(Request $request, string $refundId)
    {
        $refund = Refund::findOrFail($refundId);
        $order = $refund->order;

        if($request->status == 'accept') {

            \Midtrans\Config::$serverKey = config('midtrans.serverKey');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = config('midtrans.isProduction');
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = config('midtrans.is3ds');

            $total_refund = ($request->percent_refund / 100) * $order->total_price;

            $params = array(
                'refund_key' => 'REFUND-'.time().mt_rand(100, 999),
                'amount' => $total_refund,
                'reason' => $refund->reason,
            );

            $refundMidtrans = \Midtrans\Transaction::refund($order->transaction_id ?? $order->invoice_code, $params);

            if ($refundMidtrans->status_code == 200) {
                $refund->update([
                    'percent_refund' => $request->percent_refund,
                    'amount' => $total_refund,
                    'reason_admin' => $request->reason_admin,
                    'status' => 'accept',
                    'refund_key' => $params['refund_key'],
                ]);

                Alert::success('Sukses', 'Refund berhasil diubah');
                return redirect(route('refund.detailhistory', $refund->id));
            } else {
                abort(500, 'Terjadi Kesalahan');
            }
            
        } else if($request->status == 'reject') {
            $refund->update([
                'percent_refund' => 0,
                'amount' => 0,
                'reason_admin' => $request->reason_admin,
                'status' => 'reject',
                'refund_key' => $params['refund_key'],
            ]);

            Alert::success('Sukses', 'Refund berhasil diubah');
            return redirect(route('refund.detailhistory', $refund->id));
        }
    }
}
