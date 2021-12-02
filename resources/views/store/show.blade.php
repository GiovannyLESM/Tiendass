@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header"><hr>
        <h1>Detalle del Producto</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="product-block">
                <img src="{{$product->image}}" width="300">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-block">
                <h3>{{$product->name}}</h3><hr>
                <div class="product-info">
                    <p class="descripciones">{{$product->description}}</p>
                    <h3><span class="btn btn-success">Precio: ${{number_format($product->price,2)}}</span></h3>
                    <h3>
                        <a class="btn btn-warning btn-block" href="http://127.0.0.1:8000/cart/add/{{$product->slug}}">La Quiero</a>
                    </h3>
                </div>
            </div>
        </div>
    </div><hr>
    <p><a class="btn btn-primary" href="/">Regresar</a></p>
</div>
@stop
