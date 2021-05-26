<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $slider = Slider::where('active','=',1)->orderby('updated_at','desc')->limit(5)->get();
        $productSale = Product::where([['discount','>=',70],['is_hot','=',0]])->orderby('discount','desc')->limit(5)->get();
        $productHot = Product::where([['discount','>=',50],['is_hot','=',1]])->orderby('discount','desc')->limit(5)->get();
        $productRate = ProductType::where('total_rating','>=','4,5')->limit(5)->get();

        $productTypeMac = ProductType::where('total_rating','>=','4,5')->limit(8)->get();
        // $productMac = $productTypeMac->first()->products->first()->thumbnail;
        // dd($productMac);
        $productIpad = Product::orderby('updated_at','desc')->limit(8)->get();
        $productIphone = Product::orderby('updated_at','desc')->limit(8)->get();
        // dd($productMac->first()->products->warehouse);  
        // $product = Product::where([
        //     ['product_type_id',1],
        //     ['product_type_id',2],
        //     ['product_type_id',3],
        //     ['product_type_id',4],
        //     ['product_type_id',5],
        //     ['product_type_id',6],
        //     ['product_type_id',7],
        //     ['product_type_id',8]
        //     ])
        //     ->orderby('price','desc')
        //     ->limit(8)->get();
            // dd($product);
        return view('userPage.pages.home',compact('category','slider','productSale','productHot','productRate','productTypeMac','productIpad'));
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
