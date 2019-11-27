@extends('layout.layouts')

@section('content')
    <form action="/empleado/{{$empleado->id}}" method="POST">
        @csrf
        @method('PUT')
        <p>Ingresa tu nombre : </p>
        <input type="text" class="form-control" value="{{ $empleado->nombre}}" name="name">
        <p>Ingresa tu direccion : </p>
        <input type="text" class="form-control" value="{{ $empleado->direccion}}" name="address"><br>
        <p>Ingresa tu ci : </p>
        <input type="text" class="form-control" value="{{ $empleado->ci}}" name="cia">
        <p>Ingresa tu numero : </p>
        <input type="text" class="form-control" value="{{ $empleado->numero}}" name="number">
        <button class="btn btn-primary"> Actualizar </button>
    </form>
@endsection