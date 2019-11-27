@extends('layout.layouts')

@section('content')
<a href="/cliente/create" class="btn btn-primary mb-1"> Nuevo</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Cedula</th>
            <th scope="col">acciones</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($datos as $dato)
              <tr>
                <th scope="row">{{ $dato->id }}</th>
                <td>{{ $dato->nombre }}</td>
                <td>{{ $dato->direccion }}</td>                
                <td>{{$dato->ci}}</td>
                <td class="form-inline ">
                    <form action="/cliente/{{$dato->id}}" method="POST">
                        @method('GET')
                        <button type="submit" class="btn btn-primary mr-1"> Ver </button>    
                    </form>
                    <form action="/cliente/{{$dato->id}}/edit" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-success mr-1"> Editar </button>    
                    </form>
                    <form action="/cliente/{{$dato->id}}" method="POST">
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
