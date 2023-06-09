@extends('template')
@section('contRepetible')
<div class="position-relative">
    <div class="">
            <h1>Iniciar Sesión ♥ </h1>
            <form action="{{route('valilogin')}}" method="post">
                {{csrf_field()}}
                @if($errors->first('usuario'))
                <p style="background-color: red;">{{$errors->first('usuario')}}</p>
                @endif
                <label for="">Usuario</label>
                <input type="text" id="usuario" name="usuario"><br>
                @if($errors->first('pasw'))
                <p style="background-color: red;">{{$errors->first('pasw')}}</p>
                @endif
                <label for="">Contraseña</label>
                <input type="password" id="pasw" name="pasw"><br>
                <br>
                <button type="submit" class="btn btn-info" style="color:white">Iniciar Sesión</button><br>
            </form>
            <br>
            <a href="{{route('reglogin')}}">Registrate</a>
    </div>
      <br><br>
      @if(Session::has('mensaje'))
      <p style="background-color: red;">{{Session::get('mensaje')}}</p>
      @endif
</div>
@endsection
