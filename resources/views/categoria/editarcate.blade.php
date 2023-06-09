@extends('templateadmin')
@section('contadminRep')

<div class="container fluid" style="">
    <br><br>
    <div class="row  p-5  rounded-3" style="background-color: teal; align-items:center">
        @if (Session::has('mensaje'))
        <div class="alert alert-success d-flex align-items-center border border-success border-3 text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                <h3 style="color: rgb(0, 173, 38)"> {{Session::get('mensaje')}} <a href="{{route('iniadmin')}}" class="text-warning">Volver</a></h3>
            </div>
        </div>
        @endif
        <div class="col-lg-6 col-md-6 col-sm-6  ">   
        <h3 class="text-left" style="color:aliceblue">Editar Categoria</h3>
        <form action="{{ url('actualizarcate/'.$eTour->idc) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" style="color: aliceblue">
            {{csrf_field()}}
            @method('PUT')<hr>
            <label for="">Nombre de Categoria</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="{{$eTour->nombre}}" required><br><hr>
            
            <label for="archivo" ><b>Archivo: </b></label><br>
            <input type="file" name="image" id="image" class="rounded-3"><br><hr>
            <button class="btn btn-success">Guardar <i class="icon-save"></i></button>
            <a href="{{route('iniadmin')}}" class="btn btn-warning"> Volver</a>
        </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 text-center" >
            <img src="{{asset('imagenesTour/tours/'.$eTour->image)}}" alt="" id="preview-imagen" class="rounded-3" style="width: 370px; height: 370px; object-fit: cover;"><br>
        </div>
    </div>
</div>



@endsection