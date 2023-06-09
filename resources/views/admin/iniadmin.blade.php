@extends('templateadmin')
@section('contadminRep')
<?php
$sessionusuario = session('sessionusuario');
$sessiontipo = session('sessiontipo');
$sessionidu = session('sessionidu');

?>

<br>
<h2 class="text-center p-3 text-light bg-dark">TABLA DE LOS TOURS</h2>
<table class="table table-hover table-dark text-center table-responsive-xl">
  <thead>
      <tr>
          <th>Nombre</th>
          <th>Turismo</th>
          <th>Frecuencia</th>
          <th>Servicio</th>
          <th>Descripción</th>
          <th>dia1</th>
          <th>dia2</th>
          <th>dia3</th>
          <th>dia4</th>
          <th>dia5</th>
          <th>Imagen</th>
          <th>Acciones</th>
      </tr>
  </thead>
  <tbody>
      @foreach($mtour as $item)
      <tr id="tablasize">
          <td><div class="size">{{$item->name}}</div></td>
          <td><div class="size">{{$item->turismo}}</div></td>
          <td><div class="size">{{$item->frecuencia}}</div></td>
          <td><div class="size">{{$item->servicio}}</div></td>
          <td><div class="size">{{$item->description}}</div></td>
          <td><div class="size">{{$item->day1}}</div></td>
          <td><div class="size">{{$item->day2}}</div></td>
          <td><div class="size">{{$item->day3}}</div></td>
          <td><div class="size">{{$item->day4}}</div></td>
          <td><div class="size">{{$item->day5}}</div></td>
          <td>
              <img src="{{asset('imagenesTour/tours/'.$item->image)}}" width="70px" height="70px" alt="Image">
          </td>
          <td>
              <a href="{{url('editartour/'.$item->id)}}" class="text-warning" style="text-decoration:none"><i class="icon-edit"></i></a><br><hr>
              <a href="{{url('eliminartour/'.$item->id)}}" class="text-danger" style="text-decoration:none"><i class="icon-delete"></i></a>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
<nav aria-label="Page navigation" class="">
  <ul class="pagination justify-content-center">
      {{$mtour->links()}}
  </ul>
</nav>

<h2 class="text-center border border-warning text-warning p-3">TABLA DE CATEGORIA</h2>
<div class="text-center" style="align-items:center">
  <table class="table table-success table-striped p-5 table-hover">
    <thead>
      <tr class="table-dark">
          <th>ID</th>
          <th>Nombre</th>
          <th>Imagen</th>
          <th>Editar</th>
          <th>Borrar</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 1; $i < 2; $i++)
          @foreach($cat as $item)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$item->nombre}}</td>
            <td>
              <img src="{{asset('imagenesTour/tours/'.$item->image)}}" width="70px" height="70px" alt="Image">
            </td>
            <td>
              <a href="{{url('editarcate/'.$item->idc)}}" class="btn btn-warning"><i class="icon-edit"></i></a>
            </td>
            <td>
              <a href="{{url('eliminarcate/'.$item->idc)}}" class="btn btn-danger"><i class="icon-delete"></i></a>
            </td>
          </tr>
          @endforeach
        @endfor
      </tbody>
</table>
</div>

@endsection