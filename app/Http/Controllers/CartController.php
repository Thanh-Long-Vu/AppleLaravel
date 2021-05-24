<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    protected $orderModel;
    protected $orderDetailModel;

    public function cart()
    {
        $data = [];
        if (Session::has('cart')) {
            $data = Session('cart');
        }

        return response()->json($data);
    }

    public function add(Request $request, Product $product)
    {
        $product_type = $product->productType->name ?? '';

        $color = $product->warehouse->color ?? '';

        $cart = new Cart();
        $cart->addProduct($product, $color, $product_type);

        return Redirect::back()->with('message','Operation Successful !');
    }

    public function increase_quantity(Request $request)
    {
        $cart = new Cart();
        if ($request->quantity <= 0) {
           $request->quantity = 1;
        }
        if ($request->quantity > 10) {
           $request->quantity = 10;
        }
        $cart->update_cart($request->key, $request->quantity);

        return redirect()->route('client.showCart');
    }

    public function delete(Request $request)
    {
        $cart = new Cart();

        $cart->removeItem($request->key);

        return redirect()->route('client.showCart');
    }

    public function removeAll()
    {
        $cart = new Cart();

        $cart->removeAll();

        return redirect()->route('client.showCart');
    }
}
