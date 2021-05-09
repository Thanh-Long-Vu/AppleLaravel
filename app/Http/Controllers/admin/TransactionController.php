<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $data = Transaction::get();
        // dd($data);
        return view('adminPage.pages.transaction.list',compact('data'));
    }
    public function orderview($id){
        $order = Orders::where('transaction_id',$id)->first();
    // $name =$order->product->productType->name;
    //     dd($name);
        return view('adminPage.pages.transaction.detail',compact('order'));
    }
    public function edit()
    {
        return view('adminPage.pages.product.edit');
    }
    public function update()
    {
        return view('adminPage.pages.product.edit');
    }
}
