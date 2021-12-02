<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class StoreController extends Controller
{
    public function __invoke()
    {
        $products = Producto::all();
        //dd($products);
        return view('store.index',compact('products'));
    }
    public function show($slug)
    {
        $product = Producto::where('slug',$slug)->first();
        //dd($product);
        return view('store.show',compact('product'));
    }
}
