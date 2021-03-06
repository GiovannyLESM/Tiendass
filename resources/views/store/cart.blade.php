@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1>Carrito de Compras</h1>
    </div>
<div class="table-cart">
    @if (count($cart))

    <p>
        <a href="http://127.0.0.1:8000/cart/trash" class="btn btn-danger">Vaciar Carrito</a>
    </p>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                        <tr>
                            <td><img src="{{$item->image}}"></td>
                            <td>{{$item->name}}</td>
                            <td>${{ number_format($item->price,2)}}</td>
                            <td>
                                <input
                                    type="number"
                                    min="1"
                                    max="100"
                                    value=" {{$item->quantity}} "
                                    id="product_{{$item->id}}"
                                >
                                <a
                                    href="#"
                                    class="btn btn-warning btn-update-item"
                                    data-href="{{ route('cart-update',$item->slug) }}"
                                    data-id=" {{$item->id}} "
                                ></a>
                            </td>
                            <td>${{number_format($item->price * $item->quantity,2)}}</td>
                            <td>
                                <a href="http://127.0.0.1:8000/cart/delete/{{$item->slug}}" class="btn btn-danger">
                                    Remove
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <h3><span class="label label-success">
                Total: ${{number_format($total,2)}}
            </span></h3>
        </div>
        @else
            <h3>
                <span class="label label-warning">No hay productos en el carrito :v</span>
            </h3>
        @endif
        <hr>
        <p>
            <a href="http://127.0.0.1:8000" class="btn btn-primary">Seguir Comprando</a>
            <a href="#" class="btn btn-prinary">Continuar</a>
        </p>
</div>
</div>
@stop
