<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class HomeController extends Controller
{
    public function index()
    {
        $date = date("m");
        $dateDayOne = date("d");
        $dateWeek = $dateDayOne - 7;
        // dd(Transaction::where('status', '=', 1)->whereDay('updated_at', '>=', $dateWeek)->whereDay('updated_at','<=',$dateDayOne)->count());
        $transaction = Transaction::whereMonth('updated_at', '=', $date)->where('status', '=', 4)->orWhere('status', '=', 1)->get();
        $countTotalMoney = $transaction->sum('total_price');
        $countOrder = count($transaction);
        $dateBefore = $date - 1;
        $transactionBefore = Transaction::whereMonth('updated_at', '=', $dateBefore)->where('status', '=', 4)->orWhere('status', '=', 1)->get();
        $countTotalMoneyBefore = $transactionBefore->sum('total_price');
        $countOrderBefore = count($transactionBefore);
        $amountOrder = 100 - (($countOrderBefore / $countOrder) * 100);
        $percentIncrease = 100 - (($countTotalMoneyBefore / $countTotalMoney) * 100);
        $totalProduct = count(Product::get());
        $transactionAll = Transaction::whereMonth('updated_at', '=', $date)->get();
        $transactionNotDone = Transaction::whereMonth('updated_at', '=', $date)->where('status', '!=', 4)->where('status', '!=', 2)->get();
        $percentTransactionNotDone = number_format(((count($transactionNotDone) / count($transactionAll)) * 100));

        $productHot = Product::where('active', '=', 1)->where('active_quantity', '>', 0)->orderby('quantity_sell', 'desc')->limit(10)->get();
        $productStock = Product::where('active', '=', 1)->where('active_quantity', '>', 0)->orderby('quantity_sell', 'asc')->limit(10)->get();

        $dateDay = date("d") - 1;
        $chartDay = (new LarapexChart)->pieChart()
            ->addData([
                \App\Models\Transaction::where('status', '=', 4)->whereDay('updated_at', '>=', $dateWeek)->whereDay('updated_at', '<=', $dateDayOne)->count(),
                \App\Models\Transaction::where('status', '=', 0)->whereDay('updated_at', '>=', $dateWeek)->whereDay('updated_at', '<=', $dateDayOne)->count(),
                \App\Models\Transaction::where('status', '=', 1)->whereDay('updated_at', '>=', $dateWeek)->whereDay('updated_at', '<=', $dateDayOne)->count(),
                \App\Models\Transaction::where('status', '=', 2)->whereDay('updated_at', '>=', $dateWeek)->whereDay('updated_at', '<=', $dateDayOne)->count(),
                \App\Models\Transaction::where('status', '=', 3)->whereDay('updated_at', '>=', $dateWeek)->whereDay('updated_at', '<=', $dateDayOne)->count(),
            ])
            ->setLabels(['Reviewed', 'In-Processing', 'Successfully', 'Cancel', 'Ordered']);
        $dataMonth5 = Transaction::where('status', '=', 4)->orWhere('status', '=', 1)->whereMonth('updated_at', '=', now()->subMonths(5)->month)->count();
        $dataMonth4 = Transaction::where('status', '=', 4)->orWhere('status', '=', 1)->whereMonth('updated_at', '=', now()->subMonths(4)->month)->count();
        $dataMonth3 = Transaction::where('status', '=', 4)->orWhere('status', '=', 1)->whereMonth('updated_at', '=', now()->subMonths(3)->month)->count();
        $dataMonth2 = Transaction::where('status', '=', 4)->orWhere('status', '=', 1)->whereMonth('updated_at', '=', now()->subMonths(2)->month)->count();
        $dataMonth1 = Transaction::where('status', '=', 4)->orWhere('status', '=', 1)->whereMonth('updated_at', '=', now()->subMonths(1)->month)->count();
        $dataMonth = Transaction::where('status', '=', 4)->orWhere('status', '=', 1)->whereMonth('updated_at', '=', now()->month)->count();

        $dataCancelMonth5 = Transaction::orWhere('status', '=', 2)->whereMonth('updated_at', '=', now()->subMonths(5)->month)->count();
        $dataCancelMonth4 = Transaction::orWhere('status', '=', 2)->whereMonth('updated_at', '=', now()->subMonths(4)->month)->count();
        $dataCancelMonth3 = Transaction::orWhere('status', '=', 2)->whereMonth('updated_at', '=', now()->subMonths(3)->month)->count();
        $dataCancelMonth2 = Transaction::orWhere('status', '=', 2)->whereMonth('updated_at', '=', now()->subMonths(2)->month)->count();
        $dataCancelMonth1 = Transaction::orWhere('status', '=', 2)->whereMonth('updated_at', '=', now()->subMonths(1)->month)->count();
        $dataCancelMonth = Transaction::orWhere('status', '=', 2)->whereMonth('updated_at', '=', now()->month)->count();

        $charWeek = (new LarapexChart)->lineChart()
            ->setTitle('Statistical Reports')
            ->addLine('Reviewed', [$dataMonth5, $dataMonth4, $dataMonth3, $dataMonth2, $dataMonth1, $dataMonth])
            ->addLine('Cancel', [$dataCancelMonth5, $dataCancelMonth4, $dataCancelMonth3, $dataCancelMonth2, $dataCancelMonth1, $dataCancelMonth])
            ->setXAxis([ 'Feb', 'Mar', 'Apr', 'May', 'Jun','July'])
            ->setColors(['#3F51B5', '#E040FB',]);
        return view('adminPage.pages.home', compact('charWeek', 'chartDay', 'productStock', 'productHot', 'percentIncrease', 'countTotalMoney', 'date', 'countOrderBefore', 'countOrder', 'amountOrder', 'totalProduct', 'percentTransactionNotDone'));
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
