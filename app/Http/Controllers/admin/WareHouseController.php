<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\RequestWareHouse;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class wareHouseController extends Controller
{
    public function index()
    {        
        $listWareHouses = Warehouse::all();
        return view('adminPage.pages.warehouse.list',compact('listWareHouses'));
    }
    public function create()
    {
        $category = Category::all();
        $productType = ProductType::all();
        return view('adminPage.pages.warehouse.create',compact('category','productType'));
    }
    public function edit()
    {
        return view('adminPage.pages.warehouse.edit');
    }
    public function postcreate(Request $request){
        
        $wareHouse = new Warehouse();
        $wareHouse->name = $request->name;
        // $wareHouse->data = $requestWareHouse->data;
        $wareHouse->IMEI = $request->IMEI;
        $wareHouse->warranty = $request->warranty;
        $wareHouse->color = $request->color;
        $wareHouse->memory = $request->memory;
        $wareHouse->price = $request->price;
        $wareHouse->quantity = $request->quantity;
        $wareHouse->active = 0;
        $wareHouse->save();
        return redirect()->back();
    }
    public function updateStatus(Request $request)
    {
        $productType = Warehouse::findOrFail($request->warehouse_id);
        $productType->active = $request->active;
        $productType->save();

    return response()->json(['message' => 'Warehouse status updated successfully.']);
    }
    public function delete($id){
        $deleteWarehouse = Warehouse::find($id);
        $deleteWarehouse->delete();

        return redirect()->back();
    }
    public function history(){
        $viewWareHouse = Warehouse::onlyTrashed()->get();
        return view ('adminPage.pages.warehouse.historydelete',compact('viewWareHouse'));
    }
    public function restore($id){
        $retoreWareHouse = Warehouse::withTrashed()->find($id);
        $retoreWareHouse->restore();
        return redirect()->back()->with(['notify'=>'success','massage'=>'Khôi phục thành công']);
    }
}
