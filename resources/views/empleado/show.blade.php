@extends('layout.layouts')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ $empleado->nombre }} {{ $empleado->direccion }}
                </div>
                <div class="card-body">
                    <p>Direccion : {{ $empleado->direccion }}</p>
                    <p>Cedula Identidad : {{ $empleado->ci }}</p>
                    <p>Celular : {{ $empleado->numero }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection