<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $categoryId = $request->category_id;
        $productType = $request->productType;
        if((empty($categoryId) && !empty($productType)) || (!empty($categoryId) && !empty($productType))){
            $productType = ProductType::where('name',$productType)->orderby('created_at','desc')->get();
            return view('userPage.pages.resultSearch',compact('productType'));
        }
    }
    public function getOption(Request $request){
        $optionFilter = $request->filter;
        $searchProductType = $request->productType_id;
        if ($optionFilter == 0 ) {
            $product = Product::where('product_type_id',$searchProductType)->get();
        }elseif($optionFilter == 1 ) {
            $product = Product::where('product_type_id',$searchProductType)->orderby('updated_at','desc')->get();
        } elseif($optionFilter == 2) {
            $product = Product::where('product_type_id',$searchProductType)->orderby('price','desc')->get();
        } elseif($optionFilter == 3 ) {
            $product = Product::where('product_type_id',$searchProductType)->orderby('price','asc')->get();
        }
        return view('userPage.ajax.resultSearchAjax',compact('product'));
    }
    
}
