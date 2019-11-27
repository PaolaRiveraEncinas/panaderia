@extends('layout.layouts')

@section('content')
    <form action="/cliente/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Ingresa tu nombre : </p>
        <input type="text" class="form-control" value="{{ $cliente->nombre}}" name="name">
        <p>Ingresa tu direccion : </p>
        <input type="text" class="form-control" value="{{ $cliente->direccion}}" name="address"><br>
        <p>Ingresa tu ci : </p>
        <input type="text" class="form-control" value="{{ $cliente->ci}}" name="cia">
        <p>Ingresa tu numero : </p>
        <input type="text" class="form-control" value="{{ $cliente->numero}}" name="number">
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection