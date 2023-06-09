@extends('template')
@section('contRepetible')
<div id="page">
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html"><img src="logos/amigosdb.png" width="140"><em>♥</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="{{route('inicio')}}">Inicio</a></li>
						<li><a href="{{route('servicios')}}">Destinos</a></li>
						<li><a href="{{route('acercade')}}">información</a></li>
						<li><a href="{{route('contactos')}}">Contactos</a></li>
						<li>
							<a href="tel:+591  73871755" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn 
							u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">
							<span class="icon-phone"><img></span>&nbsp;+591&nbsp; 73871755
							</a>
						</li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/ruiau.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            
							<div class="form-wrap">
								<div class="tab">
                                <div class="tab-content">
                                <div class="tab-content-inner active" data-content="signup">
                                        <h3>Registrar Usuario</h3>
                                        <form action="{{route('createlogin')}}" method="post">
                                        {{csrf_field()}}
                                            <div class="row form-group">
                                                @if($errors->first('nombre') or $errors->first('apellido') or $errors->first('usuario') or $errors->first('pasw'))
                                                        <div class="col-md-12 text-danger">
                                                            <i class="icon-warning"> Los valores no son validos, intente nuevamente
                                                        </div>
                                                @endif
                                                @if(Session::has('mensaje'))
                                                        <div class="col-md-12 text-danger">
                                                            <i class="icon-warning"></i> {{Session::get('mensaje')}}
                                                        </div>
                                                @endif
                                                <div class="col-md-12">
                                                    <label for="">Nombre</label>
                                                    <input type="text" id='nombre' name="nombre" class="form-control" placeholder="Nombre" value="{{old('nombre')}}" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">Email</label>
                                                    <input type="text" id="email" name="email" class="form-control" placeholder="email" value="{{old('email')}}" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">Usuario</label>
                                                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" value="{{old('usuario')}}" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="">Contraseña</label>
                                                    <input type="password" id="pasw" name="pasw" class="form-control" placeholder="Contraseña" >
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="password" id="pasw2" name="pasw2" class="form-control" placeholder="Repita contraseña">
                                                </div>
                                               
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Registrarse">
                                                </div>
                                            </div>
                                            <a class="" href="{{route('inicio')}}">Iniciar Sesión</a>
                                        </form>	
                                    </div>
									</div>
								</div>
							</div>
						</div>
                        
				</div>
			</div>
		</div>
	</header>

@endsection
