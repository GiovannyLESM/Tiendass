@extends('layouts.app')

@section('content')
    <div class="container-md text-center"><hr>
        <div id="products">
            @foreach ( $products as $product)
                <div class="product white-panel">
                    <h3>{{$product->name}}</h3><hr>
                    <img src="{{$product->image}}" width="200">
                    <div class="product-info panel">
                        <h3><span class="btn btn-success">Precio: S/{{number_format($product->price,2)}}</span></h3>
                        <p>
                            <a class="btn btn-warning" href="cart/add/{{$product->slug}}">Añadir al Carrito</a>
                            <a class="btn btn-primary" href="product/{{$product->slug}}">Información</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
