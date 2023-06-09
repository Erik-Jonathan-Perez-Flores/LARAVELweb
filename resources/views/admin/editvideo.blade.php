@extends('templateadmin')
@section('contadminRep')
<?php
$sessionusuario = session('sessionusuario');
$sessiontipo = session('sessiontipo');
$sessionidu = session('sessionidu');

?>

<br>
<div class="container fluid" style="">
    <div class="row  p-5 border border-dark border-3 rounded-3" style="background-color: teal; align-items:center">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">   
        <h3 class="text-left fw-bold font-monospace text-uppercase" style="color:aliceblue">Editar Video</h3>
        <form action="{{route('crearvideo')}}" method="POST" style="color: aliceblue">
            {{csrf_field()}}<hr>
            <label for="" class="text-warning fw-bold">Porfavor No Borrar:<b class="text-info fw-bold">https://www.youtube.com/embed/</b></label>
            <input size="45%" type="text" id="url" name="url" placeholder="Url del video" value="{{$vid->url}}" required><br><hr>
            <button class="btn btn-primary">Guardar <i class="icon-save"></i></button>
        </form>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 text-center" >
            <b class="text-warning">(Copiar solo lo que muestra en la imagen y pegar sin borrar el Url)</b>
            <img src="../images/instrucciones.jpg" alt="" id="preview-imagen" class="rounded-3" style="width: 600px; height: 370px; object-fit: cover;"><br>
        </div>
    </div>
</div>
<br>

@endsection