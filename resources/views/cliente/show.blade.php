@extends('layout.layouts')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ $cliente->nombre }} {{ $cliente->direccion }}
                </div>
                <div class="card-body">
                    <p>Direccion : {{ $cliente->direccion }}</p>
                    <p>Cedula Identidad : {{ $cliente->ci }}</p>
                    <p>Celular : {{ $cliente->numero }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection