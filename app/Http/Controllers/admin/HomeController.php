<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $date = date("m");
        $transaction = Transaction::whereMonth('updated_at','=',$date)->where('status','=',4)->get();
        $countTotalMoney = $transaction->sum('total_price');
        $countOrder = count($transaction);
        $dateBefore = $date - 1;
        $transactionBefore = Transaction::whereMonth('updated_at','=',$dateBefore)->where('status','=',4)->get();
        $countTotalMoneyBefore = $transactionBefore->sum('total_price');
        $countOrderBefore = count($transactionBefore);
        $amountOrder = 100 -(($countOrderBefore / $countOrder) * 100 );
        $percentIncrease = 100-(($countTotalMoneyBefore / $countTotalMoney ) * 100);
        $totalProduct = count(Product::get());
        $transactionAll = Transaction::whereMonth('updated_at','=',$date)->get();
        $transactionNotDone = Transaction::whereMonth('updated_at','=',$date)->where('status','!=',4)->where('status','!=',2)->get();
        $percentTransactionNotDone = number_format(((count($transactionNotDone) / count($transactionAll)) *100));

        $productHot = Product::where('active','=',1)->where('active_quantity','>',0)->orderby('quantity_sell','desc')->limit(5)->get();
        $productStock = Product::where('active','=',1)->where('active_quantity','>',0)->orderby('quantity_sell','asc')->limit(5)->get();
        return view('adminPage.pages.home',compact('productStock','productHot','percentIncrease','countTotalMoney','date','countOrderBefore','countOrder','amountOrder','totalProduct','percentTransactionNotDone'));
    }
    // public function list()
    // {
    //     return view('adminPage.pages.warehouse.list');
    // }
    // public function create()
    // {
    //     return view('adminPage.pages.warehouse.create');
    // }
    // public function edit()
    // {
    //     return view('adminPage.pages.warehouse.edit');
    // }
    
    public function listimageproduct()
    {
        return view('adminPage.pages.imageproduct.list');
    }
    public function uploadimageproduct()
    {
        return view('adminPage.pages.imageproduct.upload');
    }
    public function ratings()
    {
        return view('adminPage.pages.ratings');
    }
    public function transactionlist()
    {
        return view('adminPage.pages.transaction.list');
    }
    public function transactionlistorder()
    {
        return view('adminPage.pages.transaction.listorder');
    }
    public function paymentlist()
    {
        return view('adminPage.pages.payment.list');
    }
    public function paymentcreate()
    {
        return view('adminPage.pages.payment.create');
    }
    public function usercreate()
    {
        return view('adminPage.pages.user.create');
    }
    public function useredit()
    {
        return view('adminPage.pages.user.edit');
    }
    public function rolelist()
    {
        return view('adminPage.pages.role.list');
    }
    public function transactiondetail()
    {
        return view('adminPage.pages.transaction.detail');
    }

}
