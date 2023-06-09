@extends('templateadmin')
@section('contadminRep')

<br>
<div class="container fluid" style="">
    <div class="row  p-5 border border-dark border-3 rounded-3 text-white text-center" style="background-color: rgb(51, 11, 226); align-items:center">
        <div class="col-3 border border-light">
            <label for="" class="text-warning fw-bold">NOMBRE:</label>
            <p>{{$mres->nombre}}</p>
        </div>
        <div class="col-3 border border-light">
            <label for="" class="text-warning fw-bold">CORREO:</label>
            <p>{{$mres->correo}}</p>
        </div>
        <div class="col-3 border border-light">
            <label for="" class="text-warning fw-bold">NUMERO DE PAX:</label>
            <p>{{$mres->cantidad}}</p>
        </div>
        <div class="col-3 border border-light">
            <label for="" class="text-warning fw-bold">FECHA:</label>
            <p>{{$mres->fecha}}</p>
        </div>
        <div class="col-3 border border-light">
            <label for="" class="text-warning fw-bold">NACIONALIDAD:</label>
            <p>{{$mres->nacionalidad}}</p>
        </div>
        <div class="col-3 border border-light">
            <label for="" class="text-warning fw-bold">NUMERO DE WHATSAPP:</label>
            <p><a href="tel:+{{$mres->codigo}} {{$mres->whatsapp}}"style="text-decoration:none" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn 
                u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">
                <span class="icon-phone"><img></span>+{{$mres->codigo}} {{$mres->whatsapp}}</a></p>
        </div>
        <div class="col-3 border border-light">
            <label for="" class="text-warning fw-bold">TOUR:</label>
            @if ($mres->destino=='')
                <p class="text-secondary">Sin Destino</p>
            @else
                <p>{{$mres->destino}}</p>
            @endif
        </div>
        <div class="col-3 border border-light">
            <label for="" class="text-warning fw-bold">INSTAGRAM:</label>
            @if ($mres->instagram=='')
                <p class="text-secondary">Sin Instagram</p>
            @else
                <p>{{$mres->instagram}}</p>
            @endif
        </div>
        <div class="col-12 border border-light">
            <label for="" class="text-warning fw-bold">MENSAJE:</label>
            @if ($mres->mensaje=='')
                <p class="text-secondary">Sin Mensaje</p>
            @else
                <p>{{$mres->mensaje}}</p>
            @endif
        </div>
        <div class="col-4 ">
            <br>
            @if ($mres->status == '1')
                <form action="{{ url('statusbaja/'.$mres->id) }}" class="row g-3 p-3 text-center" style="align-items:center"  method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <button class="btn btn-success" type="submit">Finalizar  <i class="icon-check2"></i></button>
                </form>
            @else
                <form action="{{ url('statusalta/'.$mres->id) }}" class="row g-3 p-3 text-center" style="align-items:center"  method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <button class="btn btn-dark" type="submit">Retomar  <i class="icon-back"></i></button>
                </form>
            @endif
        </div>
        <div class="col-6 ">

        </div>
        <div class="col-2 ">
            <br>
            <a href="{{route('reserva')}}" class="btn btn-warning"> Volver</a>
        </div>
    </div>
</div>

@endsection
