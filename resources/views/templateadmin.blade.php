<!DOCTYPE html>
<?php
$sessionusuario = session('sessionusuario');
$sessiontipo = session('sessiontipo');
$sessionidu = session('sessionidu');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Amigos De Bolivia</title>
	  <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
   
</head>

<style>
  
  .size{
  border: 1px solid #333333;
  width: 90px;
  height: 80px;
  overflow: hidden;
  }
  
  .size2{
  border: 1px solid #333333;
  width: 80px;
  height: 50px;
  overflow: hidden;
  }

</style>

<body>

   <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../logos/amigosdb.png" alt="Bootstrap" width="140" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse mt-4" id="navbarSupportedContent">
              <div class="container" style="align-items:center">
                @if($sessiontipo=="admin")
                <h4 style="color: white; ">Bienvenido {{$sessionusuario}}</h4>
                @endif
  
              </div>
              
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                <a class="btn btn-outline-info me-2" aria-current="page" href="{{route('iniadmin')}}"><i class="icon-home"></i></a>
                </li>
                <li class="nav-item">
                <a class="btn btn-outline-success me-2" aria-current="page" href="{{route('vertour')}}"><i class="icon-news"></i></a>
                </li>
                <li class="nav-item">
                <a class="btn btn-outline-light me-2" aria-current="page" href="{{route('verCate')}}"><i class="icon-list"></i></a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-danger me-2" aria-current="page" href="{{route('video')}}"><i class="icon-youtube"></i></a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-primary me-2 position-relative" aria-current="page" href="{{route('reserva')}}"><i class="icon-bell2"></i>
                    @if ($cont!=0)
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{$cont}}
                        <span class="visually-hidden"></span>
                      </span>
                    @endif
                  </a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-warning me-2" aria-current="page" href="{{route('inicio')}}"><i class="icon-reply-all"></i></a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-outline-danger me-4" aria-current="page" href="{{route('cerrarsesion')}}"><i class="icon-log-out"></i></a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    

    <div id="contadminRep" >
        @yield('contadminRep')
    </div>
    <div class="gototop js-top">
      <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
      <script src="{{asset('js/app.js')}}"></script>
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
</body>
</html>