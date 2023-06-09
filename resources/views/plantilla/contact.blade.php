@extends('template')
@section('contRepetible')
		
	<div class="gtco-loader"></div>
	
	<div id="page">

		<?php
		$sessionusuario = session('sessionusuario');
		$sessiontipo = session('sessiontipo');
		$sessionidu = session('sessionidu');
		
		?>
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="{{route('inicio')}}"><img src="logos/amigosdb.png" width="140"><em>♥</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="{{route('inicio')}}">Inicio</a></li>
						<li><a href="{{route('servicios')}}">Destinos</a></li>
						<li><a href="{{route('acercade')}}">Información</a></li>
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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/mina.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Te interesa?</span>
							<h1>Contactanos</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom" style="background-color: rgb(66, 66, 66)">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3 class="text-light">Datos de usuario </h3>
					<form action="{{route('createreserva')}}" method="POST" class="" style="color: antiquewhite">
						{{csrf_field()}}
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Nombre Completo</label>
								<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre Completo" value="{{$sessionusuario}}" required>
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" id="correo" name="correo" class="form-control" placeholder="Correo Electrónico" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Cantidad de Interesados</label>
								<input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad de Interesados" required>
							</div>
						</div>

						<div class="row form-group">
							<label class="" for="subject">Reservar Fecha</label>
							<div class="col-md-12">
								<input type="date" id="fecha" name="fecha" class="form-control" placeholder="Fecha" required>
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
								<input type="number" id="codigo" name="codigo" class="form-control w-10" placeholder="+">
							</div>
							<div class="col-md-9">
								<label class="sr-only" for="subject">Numero de WhatsApp</label>
								<input type="number" id="whatsapp" name="whatsapp" class="form-control" placeholder="Numero de Whatsapp / Celular" required>
							</div>
						</div>

						<div class="row form-group">
							<label class="" for="subject">Destino <b class="text-danger">(Opcional)</b></label>
							<div class="col-md-8">
								<input type="text" id="destino" name="destino" class="form-control" placeholder="Elige que visitar en Potosí \ Bolivia">
							</div>
							<div class="col-md-4 p-0">
								<a href="{{route('servicios')}}" class="btn btn-info btn-hover">Ver Destinos</a>
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
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3 class="text-light">Mas Información</h3>
						<ul>
							<li class="phone"><a href="tel:+591 73871755">+591 73871755</a></li>
							<li class="phone"><a href="tel:+591 77476393">+591 77476393</a></li>
							<li class="phone"><a href="tel:+591 72423488">+591 72423488</a></li>
							<li class="icon-old-phone text-light"><a href="tel:2 62 22128">2 62-22128</a></li>
							<li class="icon-old-phone text-light"><a href="tel:2 62 22128"> 2 62-26462</a></li>
							<li class="email"><a href="mailto:infoamigosboliviahelen@gmail.com">infoamigosboliviahelen@gmail.com</a></li>
						</ul>
						<div class="container">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.2039061396686!2d-65.75315780704045!3d-19.590307949692352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f94e7a40fab9cf%3A0xaeea7de7f4605933!2sAmigos%20de%20Bolivia!5e0!3m2!1ses-419!2sbo!4v1674050653237!5m2!1ses-419!2sbo" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
						<hr>
						<div class="text-center">
							<a href="https://wa.me/73871755?text=Hola%20Estoy%20Interesado%20En%20Visitar%20Bolivia%20-%20Potosí"> <img src="images/whatsapp.png" width="50" heigth="50"></a>
							<a href="https://www.facebook.com/amigosdeboliviatours"> <img src="images/facebook.png" width="50" heigth="50">  </a>
							<a href="https://www.instagram.com/amigos.de.bolivia/"> <img src="images/instagram.png" width="50" heigth="50">  </a>
							<a href="https://www.youtube.com/channel/UCxuhVDSVOrY28wQMqCst4LA"> <img src="images/youtube.png" width="50" heigth="50">  </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
