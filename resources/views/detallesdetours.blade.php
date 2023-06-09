@extends('template')
@section('contRepetible')
<?php
$sessionusuario = session('sessionusuario');
$sessionemail = session('sessionemail');
$sessiontipo = session('sessiontipo');
$sessionidu = session('sessionidu');

?>
<div id="page">
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="{{route('inicio')}}"><img src="../logos/amigosdb.png" width="140"><em>♥</em></a></div>
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

	<div id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url({{asset('imagenesTour/tours/'.$alltour->image)}})"  >
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>{{$alltour->name}}</h1>
					<hr>
					<h3 class="text-justific" style="color: azure">{{$alltour->description}}</h3>
				</div>	
			</div>
		</div>
	</div>

    <div id="gtco-features">
		<div class="gtco-container">
			
			<div class="row">
				@if($alltour->day1!='')
				<div class="col-md-6 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3><strong>PRIMER DIA</strong></h3>
						<p class="text-light">{{$alltour->day1}}</p>
					</div>
				</div>
				@endif
				@if($alltour->day2!='')
				<div class="col-md-6 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3><strong>SEGUNDO DIA</strong></h3>
						<p class="text-light">{{$alltour->day2}}</p>
					</div>
				</div>
				@endif
				@if($alltour->day3!='')
				<div class="col-md-6 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3><strong>TERCER DIA</strong></h3>
						<p class="text-light">{{$alltour->day3}}</p>
					</div>
				</div>
				@endif
				@if($alltour->day4!='')
                <div class="col-md-6 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>4</i>
						</span>
						<h3><strong>CUARTO DIA</strong></h3>
						<p class="text-light">{{$alltour->day4}}</p>
					</div>
				</div>
				@endif
				@if($alltour->day5!='')
                <div class="col-md-6 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>5</i>
						</span>
						<h3><strong>QUINTO DIA</strong></h3>
						<p class="text-light">{{$alltour->day5}}</p>
					</div>
				</div>
                @endif
			</div>
		</div>
		<div class="gtco-container text-left">
				<div class="display-tc">
					<h4 style="color: aliceblue">Frecuencia: <span style="color:black">{{$alltour->frecuencia}}</span></h4> 
					<h4 style="color: aliceblue">Tipo de Turismo: <span style="color:black">{{$alltour->turismo}}</span></h4>
					<h4 style="color: aliceblue">Tipo de Servicio: <span style="color:black"> {{$alltour->servicio}}</span></h4>
				</div>	
		</div>
	</div>
	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Contactanos para más información</h2>
					<p><hr></p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
						<form action="{{route('createreserva')}}" method="POST" class="form-inline" style="color: antiquewhite">
							{{csrf_field()}}
							@if ($sessionusuario=='')
							<div class="row form-group">
								<label class="" for="subject">Datos Personales</label>
								<div class="col-md-12">
									<label class="sr-only" for="name">Nombre Completo</label>
									<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre Completo" value="" required>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="email">Email</label>
									<input type="text" id="correo" name="correo" class="form-control" placeholder="Correo Electrónico" required>
								</div>
							</div>
							@else
							<div class="row form-group">
								<label class="" for="subject">Nombre <b class="text-warning">(Autocompletado)</b></label>
								<div class="col-md-12">
									<label class="sr-only" for="name">Nombre Completo</label>
									<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre Completo" value="{{$sessionusuario}}" required>
								</div>
							</div>
							<div class="row form-group">
								<label class="" for="subject">Email <b class="text-warning">(Autocompletado)</b></label>
								<div class="col-md-12">
									<label class="sr-only" for="email">Email </label>
									<input type="text" id="correo" name="correo" class="form-control" placeholder="Correo Electrónico" value="{{$sessionemail}}" required>
								</div>
							</div>
							@endif
							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="subject">Cantidad de Interesados</label>
									<input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad de Interesados" required>
								</div>
							</div>
	
	
							<div class="row form-group">
								<div class="col-md-12">
									<label class="sr-only" for="subject">Nacionalidad</label>
									<input type="text" id="nacionalidad" name="nacionalidad" class="form-control" placeholder="Nacionalidad" required>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-3">
									<input type="number" id="codigo" name="codigo" class="form-control w-10" placeholder="+ XXX">
								</div>
								<div class="col-md-9">
									<label class="sr-only" for="subject">Numero de WhatsApp</label>
									<input type="number" id="whatsapp" name="whatsapp" class="form-control" placeholder="Numero de Whatsapp / Celular" required>
								</div>
							</div>
	
							<div class="row form-group">
								<label class="" for="subject">Destino <b class="text-warning">(Autocompletado)</b></label>
								<div class="col-md-12">
									<input type="text" id="destino" name="destino" class="form-control" placeholder="Elige que visitar en Potosí \ Bolivia" value="{{$alltour->name}}">
								</div>
							</div>
	
	
							<div class="row form-group">
								<label class="" for="subject">Fecha de su visita</label>
								<div class="col-md-12">
									<input type="date" id="fecha" name="fecha" class="form-control" placeholder="Fecha" required>
								</div>
							</div>

							<div class="row form-group">
								<label class="" for="subject">Instagram <b class="text-danger">(Opcional)</b></label>
								<div class="col-md-12">
									<input type="text" id="instagram" name="instagram" class="form-control" placeholder="Instagram">
								</div>
							</div>
	
							<div class="row form-group">
								<label class="" for="message">Mensaje <b class="text-danger">(Opcional)</b></label>
								<div class="col-md-12">
									<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" placeholder="Escriba su mensaje"></textarea>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Enviar</button>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection