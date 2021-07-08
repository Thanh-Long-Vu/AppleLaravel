<?php

namespace App\Http\Controllers;

use App\Mail\MailInfo;
use App\Models\CancelTransaction;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function store(Request $request )
    {
        $cart = Session::get('cart');
        if(empty($cart)){
            return redirect()->back()->with('error','Can not checkout because cart is empty !!!!');
        }
        $auth = auth()->user() ?? null;
        $data = $request->all();
        data_set($data, 'status', 3);
        data_set($data, 'user_id', ($auth->id_user ?? 0));
        // dd($date);
    //    dd($request->addtional_data);
        $trasnsaction = new Transaction();
        $trasnsaction->id_transaction = time();

        $trasnsaction->addtional_data = $request->addtional_data;
        $trasnsaction->total_price = $request->total_price;
        $trasnsaction->method_receive = $request->method_receive;
        $trasnsaction->payment_method_id = $request->payment_method_id;
        $trasnsaction->user_id = $auth->id_user ?? null;
        $trasnsaction->note = $request->note;
        $trasnsaction->status = 3;
        $trasnsaction->save();

        // dd($trasnsaction->id_transaction); 
        // $trasnsaction = Transaction::create($data);
        $orderData = [];
        foreach($cart as $cart){
             array_push($orderData,[
                'price' => $cart['item']['product_price'],
                'quantity' => $cart['item']['quantity'],
                'sale' => $cart['item']['product_discount'],
                'color' => $cart['item']['color'],
                'product_id' => $cart['item']['product']->id_product,
            ]);
        $product = Product::find($cart['item']['product']->id_product);
        $product->quantity_sell += $cart['item']['quantity'];
        $product->save();
        }
        $trasnsaction->product()->attach($orderData);
        $cancelTransaction = CancelTransaction::firstOrCreate(['transaction_id'=> $trasnsaction->id_transaction, 'token'=> Str::random(60)]);
        $cancelTransactionToken = $cancelTransaction->token;
        Mail::to($request->addtional_data[1]["value"])->send(new MailInfo($trasnsaction,$cancelTransactionToken));
        Session::put('cart', []);
        return response()->json(['message' => 'Ordered Successful !']);
    }
}
