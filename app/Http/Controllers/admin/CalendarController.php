<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Orders;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(){
        
        $category = Category::get();
        return view('adminPage.pages.calendar',compact('category'));
    }
    public function getProducType($id){
        $productType = ProductType::where("category_id",$id)->pluck("name","id_product_type");
        return response()->json($productType);
    }
    public function getProduct($id){
        $product = Product::where("product_type_id",$id)->pluck("id_product");
        return response()->json($product);
    }
    
    public function getOrder($id){
        $order = Orders::whenIn('product_id',$id)->get();
        dd($order);
        $data = array();
        foreach($orderOfProduct as $val){
            $data[] = array(
                'start' => $val->date_start.'T12:00:00',
                'end' => $val->date_end.'T12:00:00',
                'bill_id' => $val->bill_id,
                'title' => "Đơn hàng số:  ".$val->bill_id,
            );
        }
        return response()->json($data);
    }
}
