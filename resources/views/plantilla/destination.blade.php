@extends('template')
@section('contRepetible')

	

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
						<li><a href="{{route('acercade')}}">Información</a></li>
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
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/toro2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1><strong>¿Que Hacer En Potosí?</strong></h1>	
							<hr>
							<p style="color:white">Elige Tu Destino</p>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section p-5">
		<div class="container text-center p-0 w-50" >
			<form action="{{route('buscar.index')}}" method="get" class="d-flex">
				<input class="form-control me-2 text-light" style="background-color: teal" type="search" name="texto" value="{{$texto}}" placeholder="Buscar">
				<button class="btn text-light me-2 rounded-3" style="background-color: teal" type="submit"><i class="icon-search"></i></button>
			</form>
		</div><br>
		@if (count($serv)<=0)
				<p class="text-secondary text-center">No hay resultados</p>
		@else
		<div class="gtco-container">
			@foreach($serv as $item)
				<div class="nuestrocontenedortour col-lg-6 col-md-6 col-sm-6 text-center rounded-1 p-0" >
					<a href="{{url('detallestours/'.$item->id)}}">
					<div class="card bg-dark text-white">
						<img src="{{asset('imagenesTour/tours/'.$item->image)}}" class="card-img nuestraimagentour" alt="...">
						<div class="card-img-overlay">
						<div class="nuestrotextotour text-uppercase fw-bold h4" >
							{{$item->name}}
						</div>
							<div class="textdebajotour">
								<hr>
								<p class="card-text col-13 text-truncate fw-bold fst-italic">{{$item->description}} </p>
								<hr>
							</div>
						</div>
					</div>
					</a>
				</div>
			@endforeach
		</div>
		@endif
	</div>
</div>
	<div class="container">
		<div class="text-center">
			<nav class="">{{$serv->links()}}</nav>
		</div>
	</div>

		
@endsection

