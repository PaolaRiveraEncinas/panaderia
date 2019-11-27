@extends('layout.layouts')

@section('content')
    <form action="/pedido/{{$pedido->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Ingresa la Fecha : </p>
        <input type="text" class="form-control" value="{{ $pedido->fecha}}" name="date">
        <p>Ingresa tu direccion : </p>
        <input type="text" class="form-control" value="{{ $pedido->direccion}}" name="address"><br>
        <p>Ingresa tu ci : </p>
        <input type="text" class="form-control" value="{{ $pedido->ci}}" name="cia">
        <p>Ingresa tu numero : </p>
        <input type="text" class="form-control" value="{{ $pedido->numero}}" name="number">
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection