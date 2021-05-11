<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $data = Transaction::orderBy('created_at','DESC')->get();
        return view('adminPage.pages.transaction.list',compact('data'));
    }
    public function orderview($id){
        $transaction = Transaction::find($id);
        $order = Orders::where('transaction_id','=',$id)->get();
        $totalprice = 0 ;
        foreach ($order as $products) {
            $totalprice += $products->price * $products->quantity;
        }
        $sale = (1- ($transaction->total_price / $totalprice)) *100;
        return view('adminPage.pages.transaction.detail',compact('order','transaction','totalprice','sale'));
    }
    public function updateStatus(Request $request)
    {
        $transaction = Transaction::findOrFail($request->id_transaction);
        $transaction->status = $request->status;
        $transaction->save();
        if($transaction->status == 0){            
            return response()->json(['message' => 'Order status changed to in progress ']);
        }else{
            return response()->json(['message' => 'Order status changed to delivery']);
        }
    }
    public function changeStatus($id)
    {
        $transaction = Transaction::find($id);
        $transaction->status = 0;
        $transaction->save();
        return back();
    }
}