@extends('templateadmin')
@section('contadminRep')
    
    @if (session('status'))
        <h6 class="alert">{{session('status')}}</h6>
    @endif
    <div class="container p-3" style="color: aliceblue">
        <div class="p-3 border-danger rounded-3 border border-dark border-3" style="background-color: teal; align-items:center">
            @if (Session::has('mensaje'))
                <div class="alert alert-success d-flex align-items-center border border-success border-3 text-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        <h3 style="color: rgb(0, 173, 38)"> {{Session::get('mensaje')}} <a href="{{route('iniadmin')}}" class="text-warning">Volver</a></h3>
                    </div>
                </div>
            @endif
            <form class="row g-3 p-3 text-center" style="align-items:center" action="{{route('registro')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                {{csrf_field()}}
            <div class="col-6 p-3 text-center " style="color: aliceblue">
                    <h3 class="text-center fw-bold font-monospace text-uppercase" style="color:white">Crear Tour/Recorrido</h3> <hr>
                    <input class="col-5" type="file" name="image" id="image" class="form-control"  value="Archivo">
                    <input class="col-6" type="text" name="name" id="name" placeholder="Nombre del Tour" value="{{old('name')}}" required><hr>
                    <input class="col-7" type="text" name="turismo" id="turismo" placeholder="Tipo de Turismo" value="{{old('turismo')}}" required>
                    <input class="col-4" type="text" name="frecuencia" id="frecuencia" placeholder="Frecuencia" value="{{old('frecuencia')}}" required><hr>
                    <textarea name="description" id="description" cols="55%" rows="8%" placeholder="Pequeña descripcion del recorrido, como un subtitulo (campo obligatorio)" value="{{old('description')}}" required></textarea>
                    
                </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-center ">
                <h4 class="text-center" style="color:aliceblue">Pre Visualizacion de la Imagen</h4><hr>
                <img src="../images/imagenes.jpg" alt="" id="preview-imagen" class="rounded-3" style="width: 370px; height: 370px; object-fit: cover;"><br>
            </div>
            <div class="col-6 p-2">
                <select name="servicio" id="servicio" class="form-select"  required>
                        <option selected disabled value="">Elegir Tipo de servicio...</option>
                        <option value="Privado">Privado</option>
                  <option value="Compartido">Compartido</option>
                  <option value="Privado y Compartido">Ambos</option>
                </select>
                </div>
                <div class="col-6 p-2">
                    <select name="idc" id="idc" class="form-select"  required><hr>
                        <option selected disabled value="">Elegir Categoria...</option>
                        @foreach($cat as $item)
                        <option value="{{$item->idc}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="col-6 p-3" >
                <label for="day1">Día 1</label>
                <textarea name="day1" id="day1" cols="60" rows="6" placeholder="Día 1"></textarea>
            </div>
            <div class="col-6 p-3">
                <label for="day2">Día 2</label>
                <textarea name="day2" id="day2" cols="60" rows="6" placeholder="Día 2"></textarea>
            </div>
            <div class="col-4 p-3">
                <label for="day3">Día 3</label>
                <textarea name="day3" id="day3" cols="40" rows="6" placeholder="Día 3"></textarea>
            </div>
            <div class="col-4 p-3">
                <label for="day4">Día 4</label>
                <textarea name="day4" id="day4" cols="40" rows="6" placeholder="Día 4"></textarea>
            </div>
            <div class="col-4 p-3">
                <label for="day5">Día 5</label>
                <textarea name="day5" id="day5" cols="40" rows="6" placeholder="Día 5"></textarea>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                @if($errors->first('name') or $errors->first('description'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                    <p style="color: red"> Uno o varios valores son invalidos intente nuevamente </p>
                    </div>
                </div>
                @endif
              <button class="btn btn-primary" type="submit">Guardar  <i class="icon-save"></i></button>
            </div>
        </form>
        
    </div>
</div>
    
        <br><br>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(e){
            $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e)=>{
                    $('#preview-imagen').attr('src',e.target.result);
                }
            reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection