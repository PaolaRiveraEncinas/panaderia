@extends('layout.layouts')

@section('content')
    <form action="/cliente" method="POST">
        @csrf     
        <p>Ingresa tu nombre : </p>
        <input type="text" class="form-control" name="name">
        <p>Ingresa tu direccion : </p>
        <input type="text" class="form-control" name="address"><br>
        <p>Ingresa tu ci : </p>
        <input type="text" class="form-control" name="cia">
        <p>Ingresa tu numero : </p>
        <input type="text" class="form-control" name="number">
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
    <h1>ENVIAR EMAIL</h1>
@endsection