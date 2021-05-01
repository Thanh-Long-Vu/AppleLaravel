<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('adminPage.pages.home');
    }
    public function list()
    {
        return view('adminPage.pages.warehouse.list');
    }
    public function create()
    {
        return view('adminPage.pages.warehouse.create');
    }
    public function edit()
    {
        return view('adminPage.pages.warehouse.edit');
    }
    public function listproduct()
    {
        return view('adminPage.pages.product.list');
    }
    public function createproduct()
    {
        return view('adminPage.pages.product.create');
    }
    public function editproduct()
    {
        return view('adminPage.pages.product.edit');
    }
    public function listcategory()
    {
        return view('adminPage.pages.category.list');
    }
    public function createcategory()
    {
        return view('adminPage.pages.category.create');
    }
    public function editcategory()
    {
        return view('adminPage.pages.category.edit');
    }
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
