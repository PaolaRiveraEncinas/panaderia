@extends('layout.layouts')

@section('content')
    <form action="/producto/{{$producto->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Ingresa el tipo de producto : </p>
        <input type="text" class="form-control" value="{{ $producto->tipo}}" name="product">
        <p>Ingresa el precio unitario : </p>
        <input type="text" class="form-control" value="{{ $producto->precio}}" name="one"><br>
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection