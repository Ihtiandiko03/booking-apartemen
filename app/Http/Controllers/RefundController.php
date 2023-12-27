<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Order;
use App\Models\Refund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefundController extends Controller
{
    public function historyRefundUser()
    {
        if (request()->ajax()) {
            $refund = Refund::where('user_id', Auth::user()->id)->get();

            return DataTables::of($refund)
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                $button =   '<a class="btn btn-primary" href="'. Route('unit.show', $item->id) .'">
                                Detail
                            </a>
                            <a class="btn btn-warning" href="'. Route('unit.edit', $item->id) .'">
                                Edit
                            </a>';
                return $button;
            })
            ->make();
        }

        return view('user.refund.index');
    }

    public function historyDetailRefundUser(string $id)
    {
        $refund = Refund::findOrFail($id);

        if ($refund->user_id != Auth::user()->id) {
            return redirect(route('refund.historyuser'));
        }

        return view('user.refund.index', compact('refund'));
    }

    public function historyRefund()
    {
        if (request()->ajax()) {
            $refund = Refund::query();
            return DataTables::of($refund)
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                $button =   '<a class="btn btn-primary" href="'. Route('refund.show', $item->id) .'">
                                Detail
                            </a>
                            <a class="btn btn-warning" href="'. Route('refund.edit', $item->id) .'">
                                Edit
                            </a>';
                return $button;
            })
            ->make();
        }

        return view('admin.refund.index');
    }

    public function historyDetailRefund(string $id)
    {
        $refund = Refund::findOrFail($id);

        return view('admin.refund.detail', compact('refund'));
    }

    public function addRefund(Request $request, string $orderId)
    {
        $order = Order::findOrFail($orderId);

        if ($order->user_id != Auth::user()->id) {
            return redirect(route('refund.historyuser'));
        }

    } 

    public function refundAgreement()
    {
        if($request->status == 'accept') {

            \Midtrans\Config::$serverKey = config('midtrans.serverKey');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = config('midtrans.isProduction');
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = config('midtrans.is3ds');

            $params = array(
                'refund_key' => 'order1-ref1',
                'amount' => 10000,
                'reason' => 'Item out of stock'
            );
            $refund = \Midtrans\Transaction::refund('ORDER-578315', $params);
            var_dump($refund);
            
        } else if($request->status == 'reject') {

        }
    }
}
