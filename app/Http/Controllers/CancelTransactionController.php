<?php

namespace App\Http\Controllers;

use App\Models\CancelTransaction;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CancelTransactionController extends Controller
{
    public function index(Request $request)
    {
        $result = CancelTransaction::where('token', $request->token)->first();
        if ($result) {
            $transaction_id = $result->transaction_id;
            $token = $result->token;
            $transaction = Transaction::where('id_transaction', $transaction_id)->firstOrFail();
            return view('userPage.pages.cancel_transaction_no_account', compact('transaction', 'token'));
        } else {
            return redirect()->route('userError');
        }
    }
    public function cancelTransaction(Request $request )
    {
        $result = CancelTransaction::where('token', $request->token)->first();
        if ($result) {
            $transaction = Transaction::where('id_transaction', $result->transaction_id)->firstOrFail();
            if ($transaction->status == 3) {
                foreach ($transaction->order as $order) {
                    $product = Product::find($order->product_id);
                    $product->quantity_sell -= $order->quantity;
                    $product->save();
                }
                $transaction->status = 2;
                $transaction->save();
                // Delete token
                CancelTransaction::where('token', $request->token)->delete();
                return redirect()->route('home')->with('success','Cancel transaction sucessfully');
            } else {
                return back()->with('failed', 'You are not cancel order.');
            }
        } else {
            return redirect()->route('userError');
        }
    }
}
