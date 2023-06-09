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
						<li><a href="{{route('servicios')}}">Destinos</a></li>
						<li><a href="{{route('acercade')}}">Nosotros</a></li>
						<li><a href="{{route('contactos')}}">Contactos</a></li>
						<li>
							<a href="tel:+591  73871755" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn 
							u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">
							<span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" 
								style="width: 1em; height: 1em;">
								<path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path>
							</svg><img></span>&nbsp;+591&nbsp; 73871755
							</a>
						</li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>

	<div id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url({{asset('imagenesTour/tours/'.$cate->image)}})">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>¡Encuentra todo lo que buscas en {{$cate->nombre}}!!</h1>
				</div>	
			</div>
		</div>
	</div>
	<div class="gtco-section ">
		
		@foreach($alltour as $item)
		@if($item->categorias_idc == $cate->idc)
		<div class="gtco-container" >
				<div class="nuestrocontenedortour col-lg-6 col-md-6 col-sm-6 text-center rounded-1 p-0" >
					<a href="{{url('detallestours/'.$item->id)}}">
					<div class="card text-white">
						<img src="{{asset('imagenesTour/tours/'.$item->image)}}" class="card-img nuestraimagentour" alt="...">
						<div class="card-img-overlay">
						<div class="nuestrotextotour text-uppercase fw-bold h1" ">
							{{$item->name}}
						</div>
						<div class="textdebajotour">
							<hr>
							<p class="card-text col-13 text-truncate fw-bold">{{$item->description}}</p>
							<hr>
						</div>
					</div>
					</a>
				</div>
			</div>
		</div>
		@endif
		@endforeach
</div>
@endsection



