@extends('layout.layouts')

@section('content')
<a href="/pedido/create" class="btn btn-primary mb-1"> Nuevo</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>                                         
            <th scope="col">fecha</th>
            <th scope="col">cliente</th>
            <th scope="col">producto</th>
            <th scope="col">empleado</th>
            <th scope="col">acciones</th>
        </tr>
    </thead>
    <tbody>
        
    @foreach ($datos as $dato)
              <tr>
                <th scope="row">{{ $dato->id }}</th>
                <td>{{ $dato->fecha }}</td>
                <td>{{$dato->cliente->nombre}}</td>
                <td>{{$dato->producto->tipo}}</td>
                <td>{{$dato->empleado->nombre}}</td>
                <td class="form-inline ">
                    <form action="/pedido/{{$dato->id}}" method="POST">
                        @method('GET')
                        <button type="submit" class="btn btn-primary mr-1"> Ver </button>    
                    </form>
                    <form action="/pedido/{{$dato->id}}/edit" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-success mr-1"> Editar </button>    
                    </form>
                    <form action="/pedido/{{$dato->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Eliminar </button>    
                    </form>
                </td>
              </tr>
        @endforeach             
    </tbody>
</table>                    

@endsection
