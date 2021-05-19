<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product);
        $size = $request->size ? $request->size : '';
        $color = $request->color ? $request->color : '';

        $image_main = Image::where('product_id', $request->product)
            ->orderBy('id', 'desc')->first();
        $product->image = $image_main->name;
        $cart = new Cart();
        $cart->addProduct($product, $color, $size);
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
