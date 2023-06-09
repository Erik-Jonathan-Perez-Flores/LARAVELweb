@extends('template')
@section('contRepetible')
		
	<div class="gtco-loader"></div>
	
	<div id="page">
		<!--git comit-!>
	
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
						<li><a href="{{route('contactos')}}">Contactos</a></li>
						<li>
							<a href="tel:+591  3871755" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn 
							u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">
							<span class="icon-phone"><img></span>&nbsp;+591&nbsp; 73871755
							</a>
						</li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/info.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text  " data-animate-effect="fadeInUp">
							<h1></h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	<div class="gtco-section fondoinformacion">
		<div class="container">
			<div class="row text-center">
				<div class="col-3">
					<a href="#museo" class="btn btn-dark">Museos</a>
				</div>
				<div class="col-3">
					<a href="#bus" class="btn btn-danger">Horario de Buses</a>
				</div>
				<div class="col-3">
					<a href="#bancos" class="btn btn-dark">Bancos y Cajeros</a>
				</div>
				<div class="col-3">
					<a href="#preguntas" class="btn btn-danger">Preguntas Frecuentes</a>
				</div>
			</div>
			<br>
			<div class="row" id="museo">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading  ">
					<img src="images/potosilogo.png" width="180" heigth="180">
					<h1 class="display-1 text-uppercase"><strong> Museos en <b style="color: red">Potosí </b></strong></h1>
				</div>
			</div>
			<div class="row row-cols-1 row-cols-md-3 g-4  ">
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Acuario Municipal "Cajas de Agua"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Chuquisaca, Esq. Fernandez</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Viernes <br> 09:00 - 16:00 En Horario Continuo</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Casa Museo "Humberto Iporre Salinas"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Nogales; Entre La Paz y Porco</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Sábado <br> 09:00 - 12:30 y 14:30 - 18:30</p>
						</div>
					</div>
				</div>
				
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo "Santa Teresa"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Santa Teresa #15</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Sábado <br> 09:00 - 12:30 y 14:30 - 18:00</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo Catedral "Santiago Apóstol"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Matos; Entre Quijarro y Junin</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Sábado <br> 09:00 - 12:00 y 14:30 - 18:00</p>
						</div>
					</div>
				</div>
				
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo Eclesiástico Franciscano</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Tarija, Esq. Nogales #47</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Viernes en las Tardes <br> 1°Tour 15:00 y 2°Tour 16:00</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo Iglesia "Inmaculada Concepción"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Hernandez; Esq B. Vargas</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Sábado <br> 08:30 - 12:00 y 15:00 - 18:00</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo Iglesia "San Martín de Tours"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Hoyos; Entre Almagro y Pizarro</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Sábado <br> 10:00 - 12:00 y 15:00 - 18:00</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo Iglesia "Santo Domingo"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Cobija, Esq. Oruro</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Viernes <br> 09:00 - 12:00 y 14:00 - 17:00</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo Militar "Sub Oficial López"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle H. Vargas #818, Entre Hernandez y Surco</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Sin Horario</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo "Casa Nacional de Moneda"</div>
						<div class="card-body text-success">
							<p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Ayacucho; Entre Quijarro <br>y Bustillos</p>
							<p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Sábado <br> 08:30 - 15:30 En Horario Continuo</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo Universitario "Dr. Ricardo Bohorquez"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Bolivar; Entre Junin y Sucre</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Viernes <br> (No Establecido)</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo "La Carroza"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Av. Corcino Rodriguez #101; Frente a la escuela Enrique Viaña, Zona Delicias</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Sábado <br> 09:00 - 12:00</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo Mirador "Nuestra Señora de la Merced"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Hoyos; Esq. Millares</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Viernes 09:00 - 12:00 <br>y 14:30 - 18:00 Sábados 09:00 - 12:00</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Museo Departamental "El Cabildo"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Plaza 10 de Noviembre Edificio Gobernación</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Viernes <br> 09:00 - 12:00</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><i class="icon-home text-danger"></i> Casa Museo de "Minerales, Piedras y Cristales"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> Calle Diaz de Oropeza #237; Entre Tupiza y San Pedro</p>
							  <p class="card-text fw-bold text-success"><i class="icon-calendar text-danger"></i> Lunes a Sábado 09:00 - 12:00 y 14:00 - 18:00</p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="{{route('contactos')}}" class="btn btn-danger rounded-pill"><i class="icon-old-phone"></i></a>
			</div>
		</div>
		
	<div class="gtco-section">
		<div class="container" id="bus">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading  ">
					<img src="images/bus.png" width="180" heigth="180">
					<h1 class="display-1 text-uppercase"><strong> Horario de Buses <b style="color: #3431ff">Potosí </b></strong></h1>
					<a href="#lapaz" class="btn btn-dark">La Paz </a>
					<a href="#sucre" class="btn btn-dark">Sucre </a>
					<a href="#cochabamba" class="btn btn-dark"> Cochabamba </a>
					<a href="#oruro" class="btn btn-dark"> Oruro </a>
					<a href="#santacruz" class="btn btn-dark"> Santa Cruz </a>
					<a href="#tarija" class="btn btn-dark"> Tarija </a>
					<a href="#tupizavillazon" class="btn btn-dark"> Tupiza - Villazón </a>
					<a href="#argentina" class="btn btn-dark"> Buenos Aires </a>
					<a href="#uyuni" class="btn btn-danger"> Uyuni </a>
					<a href="#otros" class="btn btn-danger"> Otros </a>
				</div>
			</div>
			<h1 id="lapaz" class=""><strong>La Paz <b class="text-warning">( <b>10h</b> )</b> -</strong><b class="text-primary fst-italic"> Nueva Terminal</b></h1> <hr class="" style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
			<div class="row row-cols-1 row-cols-md-3 g-4 ">
				<div class="col">
					<div class="card border-success mb-3 " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Illimani"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 1</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 20:00 - 21:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Linea "Emperador"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 4</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 21:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Transportes "El Dorado"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 2</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 20:30 - 21:00 - 21:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Relampago"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 8</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 20:45 - 21:45</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans Copacabana S.A.</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 5</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 21:30 - 22:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Bolivar"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 6</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 20:15 - 22:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Imperial Potosí"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 10</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 20:15</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Lucero"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 13 - 14</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 22:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Transporte "Galuz"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 14</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 21:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Tours "Arequipa"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 20</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 22:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Galeon"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 24</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 19:30 - 22:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Sucre"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 25</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 19:30 - 22:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Copacabana MEM"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 28</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 21:30 - 22:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Jumbo Bus "Cosmos"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 29</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 21:45</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Universo"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 30</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 19:30 - 21:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Copacabana"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 32</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 21:00 - 21:15 - 21:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Bus "Chicheño"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 33</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 19:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Expreso "Cochabamba"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 33</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i> <b class="text-danger">Noche:</b> 20:00 - 21:00</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
			</div>
			<h1 id="sucre" class=" "><strong>Sucre <b class="text-warning">( <b>3h</b> )</b> -</strong><b class="text-primary fst-italic"> Nueva Terminal</b></h1> <hr class=" " style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
			<div class="row row-cols-1 row-cols-md-3 g-4  ">
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Villa Imperial"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 2</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana:</b> 06:30<b class="text-danger">-</b>08:00<b class="text-danger">-</b>09:30<b class="text-danger">-</b>10:30<b class="text-danger">-</b>11:15 <br> <i class="icon-calendar text-danger"></i><b class="text-danger">Tarde:</b> 14:00<b class="text-danger">-</b>15:30<b class="text-danger">-</b>16:15<b class="text-danger">-</b>17:30<b class="text-danger">-</b>18:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Emperador"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 4</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana:</b> 06:00<b class="text-danger">-</b>07:00<b class="text-danger">-</b>08:30<b class="text-danger">-</b>10:00 <br>
							 <i class="icon-calendar text-danger"></i><b class="text-danger">Tarde:</b> 12:30<b class="text-danger">-</b>14:00<b class="text-danger">-</b>17:30<b class="text-danger">-</b>18:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Lima Fer "Angeles" SRL</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 15</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana:</b> 06:45<b class="text-danger">-</b>10:45<br>
							 <i class="icon-calendar text-danger"></i><b class="text-danger">Tarde:</b> 16:00<b class="text-danger">-</b>17:45</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Transtin "Dilrey"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 11-12</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana:</b> 07:00<b class="text-danger">-</b>10:00<br>
							 <i class="icon-calendar text-danger"></i><b class="text-danger">Tarde:</b> 13:00<b class="text-danger">-</b>17:00<b class="text-danger">-</b>18:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Real Audiencia</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 18</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana:</b> 07:00<b class="text-danger">-</b>09:00<b class="text-danger">-</b>11:00<br>
							 <i class="icon-calendar text-danger"></i><b class="text-danger">Tarde:</b> 13:00<b class="text-danger">-</b>17:00<b class="text-danger">-</b>18:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Alonzo De Ibañez"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 11</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana:</b> 05:30<b class="text-danger">-</b>06:30<b class="text-danger">-</b>07:30<b class="text-danger">-</b>08:30<b class="text-danger">-</b>09:30<b class="text-danger">-</b>10-30<b class="text-danger">-</b>11:30<b class="text-danger">-</b>12:00 <br>
							 <i class="icon-calendar text-danger"></i><b class="text-danger">Tarde:</b> 13:30<b class="text-danger">-</b>14:30<b class="text-danger">-</b>15:00<b class="text-danger">-</b>16:00<b class="text-danger">-</b>17:30<b class="text-danger">-</b>18:30</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
			</div>
			<h1 id="cochabamba" class=" "><strong>Cochabamba <b class="text-warning">( <b>9h</b> )</b> -</strong><b class="text-primary fst-italic"> Nueva Terminal</b></h1> <hr class=" " style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
			<div class="row row-cols-1 row-cols-md-3 g-4  ">
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Transporte "El Dorado"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 2</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 20:00 - 20:45</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Emperador"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 4</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 21:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Copacabana S.A."</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 5</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b><b class="text-warning"> Semi Cama</b> 21:00 - <b class="text-warning"> Cama</b> 21:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Bolivar"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 6</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 21:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Imperial Potosí"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 10</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 21:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Norte"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 11</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 20:45</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Transporte "Lucero"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 13 - 14</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 20:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> "Diamante"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 14 - 15</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 22:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Jet Nort Super Class</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 19</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 22:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> "San Jose"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 21</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 21:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Cosmos"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 29</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 21:30</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Unificado"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 31</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 20:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Copacabana"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 32</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 20:30 - 20:45</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Expreso Cochabamba</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 33</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche:</b> 20:30</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
			</div>
			<h1 id="oruro" class=" "><strong>Oruro <b class="text-warning">( <b>6:30h</b> )</b> -</strong><b class="text-primary fst-italic"> Nueva Terminal</b></h1> <hr class=" " style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
			<div class="row row-cols-1 row-cols-md-3 g-4   ">
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Andorinha "San Miguel"</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 7</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>07:00-09:00-11:00-12:00 <br><i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>13:30-16:45-18:00<br><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>20:00-23:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans Azul</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 6</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark">
							<i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>07:00-10:00<br><i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>13:30-16:30-18:00<br><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>22:00-23:15</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Golden Bus</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 16</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>No Disponible<br><i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>13:15<br><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>22:45</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> San Jose</div>
						<div class="card-body text-success"><p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 21</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>05:00-06:00-07:30-10:00-11:00<br><i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>14:30-15:30-17:00<br><i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>20:30-23:00</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold">
							<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Challapata</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success">
								<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 22 - 23</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark">
							<i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>06:30-07:45-11:30<br>
							<i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>12:30-16:30<br>
							<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>20:45-22:45</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-success mb-3  " style="max-width: 40rem;">
						<div class="card-header bg-transparent border-success text-primary fw-bold">
							<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Omnibuses Bustillo</div>
						<div class="card-body text-success">
							  <p class="card-text fw-bold text-success">
								<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 31</p>
						</div>
						<div class="card-footer bg-transparent border-success fw-bold text-dark">
							<i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>11:00<br>
							<i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>No Disponible<br>
							<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>20:30-23:00 <b class="text-warning">(Llallagua)</b></div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
			</div>
				<h1 id="santacruz" class=" "><strong>Santa Cruz <b class="text-warning">( <b>17h</b> )</b> -</strong><b class="text-primary fst-italic"> Nueva Terminal</b></h1> <hr class=" " style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
				<div class="row row-cols-1 row-cols-md-3 g-4   ">
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Villa Imperial"</div>
							<div class="card-body text-success">
								<p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 2</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>12:30 - 14:30 - 16:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Boqueron"</div>
							<div class="card-body text-success">
								<p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 1 - 2</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>14:00 - 16:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Auto Transporte Tupiza</div>
							<div class="card-body text-success">
								<p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 6</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>14:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Jet Nort Uper Class</div>
							<div class="card-body text-success">
								<p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 19</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>15:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Tours Villa Imperial</div>
							<div class="card-body text-success">
								<p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i> <b class="text-danger">Carril:</b> 30</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>15:00</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
				</div>
				<h1 id="tarija" class=" "><strong>Tarija <b class="text-warning">( <b>8h</b> )</b> -</strong><b class="text-primary fst-italic"> Nueva Terminal</b></h1> <hr class=" " style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
				<div class="row row-cols-1 row-cols-md-3 g-4   ">
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Linea "Emperador"</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 4</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>22:45</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Norte"</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 11</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>21:00 - 22:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Limelvi Tours S.R.L</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 20</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>21:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Expreso Tarija</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 23</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>21:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Tours "Villa Imperial"</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 30</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>20:30 - 22:00</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
				</div>
				<h1 id="tupizavillazon" class=" "><strong>Tupiza y Villazon -</strong><b class="text-primary fst-italic"> Nueva Terminal</b></h1> <hr class=" " style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
				<div class="row row-cols-1 row-cols-md-3 g-4   ">
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Boqueron" <b class="text-warning">(Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 2</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>08:30<br>
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>22:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Auto Transporte Tupiza <b class="text-warning">(Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 6</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>08:00 <b class="text-danger"> Tarde: </b>14:30 <br>
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>20:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Villa Imperial" <b class="text-warning">(Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 7</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>08:30<br>
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>21:30</div>
						</div>
					</div>
					
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Expreso Tupiza <b class="text-warning">(Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 13</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>08:15 <b class="text-danger"> Tarde: </b>12:30<br>
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>20:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> ATL Villazon <b class="text-warning">(Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 12</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>13:30<br>
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>21:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Exp. Panamericano <b class="text-warning">(Tupiza - Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 31</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>07:30<br>
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>22:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans o Globo <b class="text-warning">(Tupiza - Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 31</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Mañana: </b>08:00<br>
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>21:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Bus Chicheño <b class="text-warning">(Tupiza - Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 33</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>21:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Flota "Mundo" <b class="text-warning">(Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 10</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>21:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Trans "Norte" <b class="text-warning">(Tupiza - Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 11</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Tarde: </b>13:00 - 16:00 - 22:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Diamante <b class="text-warning">(Villazón)</b></div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 14 - 15</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>22:00</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
				</div>
				<h1 id="argentina" class=" "><strong>Buenos Aires - Argentina -</strong><b class="text-primary fst-italic"> Nueva Terminal</b></h1> <hr class=" " style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
				<div class="row row-cols-1 row-cols-md-3 g-4   ">
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Auto Buses "Quirquincho"</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 17</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>21:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Royal Class</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-location2 text-danger"></i><b class="text-danger">Carril:</b> 32</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Noche: </b>22:00</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
				</div>
				<h1 id="uyuni" class=" "><strong>Uyuni -</strong><b class="text-danger fst-italic"> Ex Terminal</b></h1> <hr class=" " style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
				<div class="row row-cols-1 row-cols-md-3 g-4   ">
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Turismo 11 de Julio</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Normal</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>11:45 - 19:30</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Turismo Diana Tours</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Normal - Semicama</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>11:00 - 14:00 - 18:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Emperador</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Normal - Semicama - Cama</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>12:30 - 16:00 - 19:00 -21:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Turismo America</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Normal - Semicama</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>07:00 - 11:00 - 18:30</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
				</div>
					<h1 id="otros" class=" "><strong>Otros -</strong><b class="text-danger fst-italic"> Ex Terminal</b></h1> <hr class=" " style="border-color: rgb(0, 0, 0); border-width: 0.3rem">
					<div class="row row-cols-1 row-cols-md-3 g-4   ">
					
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Expreso ATL</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Privado</p>
									<i class="icon-star text-danger"></i><b class="text-danger">Destino:</b> Villazón</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>A Elección</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Sindicato Mixto 25 de Mayo</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Privado</p>
									<i class="icon-star text-danger"></i><b class="text-danger">Destino:</b> Tarija(Camargo)</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>08:00 - 12:00 - 13:00 - 17:00</div>
						</div>
					</div>
					
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Expreso Chayanta ATL</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Normal</p>
									<i class="icon-star text-danger"></i><b class="text-danger">Destino:</b> Macha</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>10:00 - 14:00 - 17:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Expreso 25 de Mayo</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Privado</p>
									<i class="icon-star text-danger"></i><b class="text-danger">Destino:</b> Tarija(Camargo)</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>A Elección</div>
						</div>
					</div>
					
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Pocoata</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Normal</p>
									<i class="icon-star text-danger"></i><b class="text-danger">Destino:</b> Pocoata</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>12:00 - 16:00 - 18:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Tours Colquechaca</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Normal</p>
									<i class="icon-star text-danger"></i><b class="text-danger">Destino:</b> Colquechaca</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>14:00 - 18:00</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Transporte Nor Chichas 27 de Octubre</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Privado</p>
									<i class="icon-star text-danger"></i><b class="text-danger">Destino:</b> Cotagaita - Tupiza - Villazon - Atocha - Uyuni</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Horario: </b>A Elección</div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3  " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold">
								<img src="images/iconbus.png" width="20" heigth="20" class="text-danger"> Tomave</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success">
									<i class="icon-star text-danger"></i><b class="text-danger">Tipo:</b> Normal</p>
									<i class="icon-star text-danger"></i><b class="text-danger">Destino:</b> Tomave</p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark">
								<i class="icon-calendar text-danger"></i><b class="text-danger"> Martes: </b>10:00<b class="text-danger"> Viernes: </b>12:00<b class="text-danger"> Domingo: </b>12:00</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="{{route('contactos')}}" class="btn btn-warning rounded-pill"><i class="icon-phone"></i></a>
				</div>
			</div>
		</div>
		<div class="gtco-section p-0">
			<div class="container" id="bancos">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading  ">
						<img src="images/cajero.png" width="180" heigth="180">
						<h1 class="display-1 text-uppercase"><strong> Bancos y Cajeros en <b style="color: #1a501f">Potosí</b></strong></h1>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-md-3 g-4 ">
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco FIE</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Banco+FIE,+Agencia+Potos%C3%AD/@-19.5897612,-65.7554396,17z/data=!4m19!1m13!4m12!1m4!2m2!1d-65.7533785!2d-19.5902678!4e1!1m6!1m2!1s0x93f94e7a71ed9d83:0xe6c4b278542a7770!2sC66W%2B7QR+Banco+FIE,+Agencia+Potos%C3%AD,+Villa+Imperial+de+Potos%C3%AD!2m2!1d-65.7531365!2d-19.5892557!3m4!1s0x93f94e7a71ed9d83:0xe6c4b278542a7770!8m2!3d-19.5892557!4d-65.7531365?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <a href="https://www.bancofie.com.bo/">Ver</a></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco Unión</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Banco+Uni%C3%B3n+S.A./@-19.5891706,-65.755092,17z/data=!4m5!3m4!1s0x93f94e7085b8cf35:0x8214e9a40c14281!8m2!3d-19.5880794!4d-65.7525712?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <a href="https://www.bancounion.com.bo/">Ver</a></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco Fassil - Cajero Automático</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Banco+Fassil+-+Cajero+Autom%C3%A1tico+San+Roque/@-19.5882586,-65.7526391,21z/data=!4m5!3m4!1s0x93f94e7085ac8a03:0x4e56185b67f4bd6c!8m2!3d-19.5880805!4d-65.7525713?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <a href="https://www.fassil.com.bo/">Ver</a></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco Sol</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Banco+Sol/@-19.5897054,-65.7545763,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94fa75f0fa985:0xfe5b8d5127001deb!8m2!3d-19.5897051!4d-65.7523815?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <b class="text-secondary">No disponible</b></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco Sol ATM</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/BancoSol,+ATM+Boulevard/@-19.5895443,-65.7564579,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94e7a647aba77:0x1c00bc1f3b52b464!8m2!3d-19.5895585!4d-65.7522296?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <b class="text-secondary">No disponible</b></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco Prodem S. A. Cajeros Automaticos</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Banco+Prodem+S.+A.+-+Cajeros+Autom%C3%A1ticos+Potos%C3%AD+Central/@-19.5876501,-65.7553733,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94e709402f9c5:0x9e494f097baed471!8m2!3d-19.5876501!4d-65.7531854?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <b class="text-secondary">No disponible</b></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco Bisa S.A.</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Banco+Bisa+S.A./@-19.5883065,-65.7562661,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94e70a4ffffe5:0x4c0d97033d637d6c!8m2!3d-19.5883041!4d-65.7540003?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <b class="text-secondary">No disponible</b></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco Mercantil Santa Cruz</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Mercantil+Santa+Cruz/@-19.5883031,-65.7546682,17z/data=!4m5!3m4!1s0x93f94e7a78af3a5f:0x984dac1814e7e771!8m2!3d-19.5883009!4d-65.7523952?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <a href="http://www.bmsc.com/">Ver</a></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> SAFI Unión S.A.</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/SAFI+Uni%C3%B3n+S.A/@-19.5879018,-65.7545946,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94e708439d5e5:0xb4bf3107984b6829!8m2!3d-19.5879048!4d-65.7524605?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <a href="http://www.safiunion.com.bo/">Ver</a></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> ECOFUTURO</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/ECOFUTURO/@-19.5876842,-65.7568659,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94e70b5d26435:0x576da03bb9a73d38!8m2!3d-19.587684!4d-65.7546745?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <b class="text-secondary">No disponible</b></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Coop. Catedral Ltda.</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Coop.+Catedral+Ltda./@-19.5875343,-65.7543507,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94e7089892a9f:0x70546316176a808!8m2!3d-19.5875343!4d-65.752162?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <a href="https://www.catedral.com.bo/">Ver</a></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> POTOSI E.F.V.</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/POTOSI+E.F.V./@-19.5892509,-65.7550252,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94e7a706cfc93:0x29ed34af17940871!8m2!3d-19.5892509!4d-65.7528365?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <b class="text-secondary">No disponible</b></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco de Crédito de Bolivia</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Banco+de+Cr%C3%A9dito+de+Bolivia+S.A./@-19.5888689,-65.7566837,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94e7a0857fa15:0xbcc5a28cebbb9910!8m2!3d-19.5888688!4d-65.7544935?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <a href="https://www.bcp.com.bo/">Ver</a></div>
						</div>
					</div>
					<div class="col">
						<div class="card border-success mb-3 " style="max-width: 40rem;">
							<div class="card-header bg-transparent border-success text-primary fw-bold"><img src="images/banco1.png" width="20" heigth="20" class="text-danger"> Banco Económico S.A.</div>
							<div class="card-body text-success">
								  <p class="card-text fw-bold text-success"><i class="icon-location2 text-danger"></i> <b class="text-danger">Ubicación:</b> <a href="https://www.google.com/maps/place/Banco+Econ%C3%B3mico+S.A/@-19.5877398,-65.7553855,17z/data=!3m1!4b1!4m5!3m4!1s0x93f94f58cd35a163:0xd61e728b60e413fc!8m2!3d-19.5877399!4d-65.7531803?hl=es-419">Ver en GoogleMap</a></p>
							</div>
							<div class="card-footer bg-transparent border-success fw-bold text-dark"><i class="icon-open text-danger"></i> <b class="text-danger">Web:</b> <b class="text-secondary">No disponible</b></div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<br>
			<div class="row" id="preguntas">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading  ">
							<img src="images/info.png" width="180" heigth="180">
							<h1 class="display-1 text-uppercase"><strong>Preguntas Frecuentes</strong></h1>
						</div>
					</div>
					<ul class="fh5co-faq-list">
						<li class=" ">
							<h2>¿A cuantos metros de altura a nivel del mar esta Potosí?</h2>
							<p>Es una ciudad del suroeste (sur occidente) de Bolivia, capital y ciudad más poblada del departamento del mismo nombre y de la provincia de Tomás Frías. Elevación: 4,090 metros a nivel del mar.</p>
						</li>
						<li class=" ">
							<h2>¿Que tipo de clima hace en Potosí?</h2>
							<p>En Potosí, los veranos son cortos, frescos y mayormente nublados y los inviernos son cortos, muy frío, nevados y mayormente despejados. Durante el transcurso del año, la temperatura generalmente varía de -4 °C a 18 °C y rara vez baja a menos de -6 °C o sube a más de 21 °C.</p>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection
