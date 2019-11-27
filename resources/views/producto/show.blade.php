@extends('layout.layouts')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ $producto->tipo }} {{ $producto->precio }}
                </div>
                <div class="card-body">
                    <p>Tipo de Producto : {{ $producto->tipo }}</p>
                    <p>Precio Unitario : {{ $producto->precio }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection