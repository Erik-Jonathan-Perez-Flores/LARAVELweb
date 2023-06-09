@extends('templateadmin')
@section('contadminRep')
<?php
$sessionusuario = session('sessionusuario');
$sessiontipo = session('sessiontipo');
$sessionidu = session('sessionidu');

?>
<br>
<div>
    <div class="container-fluid text-center">
        <h3 class="border border-success p-3 bg-dark text-light">Registro de Usuarios Interesados</h3>
    </div>
    <table class="table table-dark table-hover text-center">
        <thead>
            <tr>
                <th>Registrado</th>
                <th>Correo</th>
                <th>Pax</th>
                <th>Fecha</th>
                <th>Nacionalidad</th>
                <th>Codigo</th>
                <th>WhatsApp</th>
                <th>Destino</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody >
            @foreach($verres as $item)
            @if ($item->status == '1')
                <tr id="tablasize">
                    <td><div>{{$item->created_at->format('d-m-Y')}}</div></td>
                    <td><div>{{$item->correo}}</div></td>
                    <td><div>{{$item->cantidad}}</div></td>
                    <td><div>{{$item->fecha}}</div></td>
                    <td><div>{{$item->nacionalidad}}</div></td>
                    <td><div>{{$item->codigo}}</div></td>
                    <td><div>{{$item->whatsapp}}</div></td>
                    <td><div>{{$item->destino}}</div></td>
                    <td>
                        <a href="{{url('mostrarres/'.$item->id)}}" class="text-warning" style="text-decoration:none"><i class="icon-eye"></i></a>
                    </td>
                    <td>
                        <a href="{{url('eliminarres/'.$item->id)}}" class="text-danger" style="text-decoration:none"><i class="icon-delete"></i></a>
                    </td>
                </tr>
            @else
                    <tr id="tablasize" class="table table-danger text-secondary">
                        <td><div>{{$item->created_at->format('d-m-Y')}}</div></td>
                        <td><div>{{$item->correo}}</div></td>
                        <td><div>{{$item->cantidad}}</div></td>
                        <td><div>{{$item->fecha}}</div></td>
                        <td><div>{{$item->nacionalidad}}</div></td>
                        <td><div>{{$item->codigo}}</div></td>
                        <td><div>{{$item->whatsapp}}</div></td>
                        <td><div>{{$item->destino}}</div></td>
                        <td>
                            <a href="{{url('mostrarres/'.$item->id)}}" class="text-primary" style="text-decoration:none"><i class="icon-back"></i></a>
                        </td>
                        <td>
                            <a href="{{url('eliminarres/'.$item->id)}}" class="text-danger" style="text-decoration:none"><i class="icon-delete"></i></a>
                        </td>
                    </tr>                              
                @endif
            @endforeach
        </tbody>
      </table>
</div>

@endsection