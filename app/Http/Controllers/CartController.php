<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart',array());
    }

    //show cart
    public function show()
    {
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.cart',compact('cart','total'));
    }
    //add item
    public function add(Producto $product)
    {
        $cart = \Session::get('cart');
        $product -> quantity = 1;
        $cart[$product->slug]=$product;
        \Session::put('cart',$cart);

        return redirect('http://127.0.0.1:8000/cart/show');
    }
    //delete item
    public function delete(Producto $product)
    {
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart',$cart);
        return redirect('http://127.0.0.1:8000/cart/show');
    }
    //update item
    public function update(Producto $product, $quantity)
    {
        $cart = \Session::get('cart');
        $cart[$product->slug] -> quantity = $quantity;
        \Session::put('cart',$cart);

        return redirect('http://127.0.0.1:8000/cart/show');
    }
    //trash cart
    public function trash()
    {
        \Session::forget('cart');
        return redirect('http://127.0.0.1:8000/cart/show');
    }
    //total
    public function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->price * $item->quantity;
        }
        return $total;
    }
}
