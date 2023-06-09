@extends('templateadmin')
@section('contadminRep')
<br>
<div class="container fluid" style="">
    <div class="row  p-5 border border-dark border-3 rounded-3" style="background-color: teal; align-items:center">
        <div class="col-lg-6 col-md-6 col-sm-6  ">   
        <h3 class="text-left fw-bold font-monospace text-uppercase" style="color:aliceblue">Crear Categoria</h3>
        <form action="{{route('guardarCate')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" style="color: aliceblue">
            {{csrf_field()}}<hr>
            <label for="">Nombre de Categoria</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br><hr>
            
            <label for="archivo" ><b>Archivo: </b></label><br>
            <input type="file" name="image" id="image" class="rounded-3" required><br><hr>
            <button class="btn btn-primary">Guardar <i class="icon-save"></i></button>
        </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 text-center" >
            <img src="../images/imagenes.jpg" alt="" id="preview-imagen" class="rounded-3" style="width: 370px; height: 370px; object-fit: cover;"><br>
        </div>
    </div>
</div>
<br>



@endsection
