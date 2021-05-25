<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('userPage.pages.home',compact('category'));
    }
    public function autoComplete(Request $request){
        $filterAble = $request->only('name~','category_id');
        $productType = ProductType::orderby('name','asc')->filterAble($filterAble)->get();
        $response = array();
        foreach($productType as $productTypeVal){
            $response[] = array("value"=>$productTypeVal->id_product_type,"label"=>$productTypeVal->name);
        }
        return response()->json($response);
    }
    public function productype()
    {
        return view('userPage.pages.producttype');
    }
    public function product()
    {
        return view('userPage.pages.product');
    }
    public function checkout()
    {
        return view('userPage.pages.checkout');
    }
    public function cart()
    {
        return view('userPage.pages.cart');
    }
    public function track_your_order(){
        return view('userPage.pages.track_your_order');
    }
    public function NotFound(){
        return view('userPage.pages.page404');
    }
    public function Contact(){
        return view('userPage.pages.contact');
    }
    public function Blog(){
        return view('userPage.pages.blog');
    }
    public function Blogdetail(){
        return view('userPage.pages.blog-detail');
    }
}
