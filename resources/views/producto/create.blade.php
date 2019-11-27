@extends('layout.layouts')

@section('content')
    <form action="/producto" method="POST">
        @csrf     
        <p>Ingrese el tipo de producto: </p>
        <input type="text" class="form-control" name="product">
        <p>Ingresa el precio unitario : </p>
        <input type="text" class="form-control" name="one"><br>
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
    <h1>ENVIAR EMAIL</h1>
@endsection