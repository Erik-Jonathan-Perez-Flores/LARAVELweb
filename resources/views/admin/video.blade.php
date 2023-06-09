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
        <h3 class="text-left fw-bold font-monospace text-uppercase" style="color:aliceblue">Crear Video</h3>
        <form action="{{route('crearvideo')}}" method="POST" style="color: aliceblue">
            {{csrf_field()}}<hr>
            <label for="">Url del Video</label>
            <input size="45%" type="text" id="url" name="url" placeholder="Url del video" value="https://www.youtube.com/embed/" required><br><hr>
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

    <div class="container text-center" style="">
        <h3 class="text-danger">¡Advertencia!</h3>
        <h4 class="text-warning fw-bold">No pasar de 4 videos, el diseño sera afectado</h4>
            @foreach ($vid as $item)
					<iframe width="560" height="315" src="{{$item->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <p>URL: {{$item->url}} <a href="{{url('editarvideo/'.$item->id)}}" class="btn btn-primary" style="text-decoration:none"><i class="icon-edit"></i></a><a href="{{url('eliminarvideo/'.$item->id)}}" class="btn btn-danger" style="text-decoration:none"><i class="icon-delete"></i></a></p>
            @endforeach
	</div>
	

@endsection