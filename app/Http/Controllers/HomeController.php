<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ImagesProduct;
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

        $productTypeMac = ProductType::where('category_id','=',1)->limit(4)->orderby('updated_at','asc')->get();
        $productTypeIpad = ProductType::where('category_id','=',2)->limit(1)->orderby('updated_at','asc')->get();
        $productTypeIphone = ProductType::where('category_id','=',3)->limit(1)->orderby('updated_at','asc')->get();
        $productTypeWatch = ProductType::where('category_id','=',4)->limit(1)->orderby('updated_at','asc')->get();

        $productTypeMacTotalRating = ProductType::orderBy('total_rating','desc')->first();
        // $image = ImagesProduct::where('product_type_id',$productTypeMacTotalRating->id_product_type)->get();
        // dd($image);
        $productTypeIpadTotalRating = ProductType::orderBy('total_rating','desc')->first();
        $productTypeIphoneTotalRating = ProductType::orderBy('total_rating','desc')->first();
        $productTypeWatchTotalRating = ProductType::orderBy('total_rating','desc')->first();
        return view('userPage.pages.home',compact('category','slider','productSale','productHot','productRate','productTypeMac','productTypeIpad','productTypeIphone','productTypeWatch','productTypeMacTotalRating','productTypeIpadTotalRating','productTypeIphoneTotalRating','productTypeWatchTotalRating'));
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
