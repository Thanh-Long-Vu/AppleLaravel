<?php

namespace App\Http\Controllers;

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
}
