@extends('layout.layouts')

@section('content')
    <form action="/pedido" method="POST">
        @csrf     
        <p>Ingrese la fecha : </p>
        <input type="date" class="form-control" name="fecha">
        <div class="form-group">
            <label for="">Seleccione el cliente : </label>
            <select name="cliente" class="custom-select">
                @foreach ($clientes as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>                    
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Seleccione el producto : </label>
            <select name="producto" class="custom-select">
                @foreach ($productos as $item)
                    <option value="{{ $item->id }}">{{ $item->tipo }}</option>                    
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Seleccione el empleado : </label>
            <select name="empleado" class="custom-select">
                @foreach ($empleados as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>                    
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary"> Guardar </button>
    </form>
    <h1>ENVIAR EMAIL</h1>
@endsection