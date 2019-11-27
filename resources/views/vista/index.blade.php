@extends('layout.layouts')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="cliente">CLIENTE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="empleado">EMPLEADO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="producto">PRODUCTO</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="pedido">PEDIDO</a>
      </li>
    </ul>
    
  </div>
</nav>

@endsection
