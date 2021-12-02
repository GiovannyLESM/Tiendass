@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $producto->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Brand Id:</strong>
                            {{ $producto->brand_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $producto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $producto->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Details:</strong>
                            {{ $producto->details }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $producto->price }}
                        </div>
                        <div class="form-group">
                            <strong>Shipping Cost:</strong>
                            {{ $producto->shipping_cost }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $producto->description }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $producto->image }}
                        </div>
                        <div class="form-group">
                            <strong>Visible:</strong>
                            {{ $producto->visible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
