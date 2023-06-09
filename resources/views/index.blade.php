@extends('template')
@section('contRepetible')
<div class="gtco-loader"></div>
	
	<div id="page">
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="{{route('inicio')}}"><img src="images/logo3.png" width="140"></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="{{route('servicios')}}">Viajar</a>
							<ul class="dropdown">
								@foreach($cate as $item)
								<li><a href="{{url('verrec/'.$item->idc)}}">{{$item->nombre}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('servicios')}}">Destinos</a></li>
						<li><a href="{{route('acercade')}}">Información</a></li>
						<li><a href="{{route('contactos')}}">Contactos</a></li>
						<li>
							<a href="tel:+591 73871755" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn 
							u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">
							<span class="icon-phone"><img></span>&nbsp;+591&nbsp; 73871755
							</a>
						</li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>


	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/imgsalar.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<b class="fs-1">OPERADORA DE TURISMO</b>
							<h1> <strong>Amigos de <b class="text-danger"><u>Bo</u></b><b class="text-warning"><u>li</u></b><b class="text-success"><u>via</u></b></strong></h1>	
                            <p style="color:white">Creemos que cada viajero, tiene su propia idea de cómo debe ser su viaje.
                            Sabemos que sus expectativas están en un buen servicio de calidad que lo gratifiquen y le impulsen a seguir descubriendo más y más destinos, Potosí puerta del turismo en Bolivia. 
                            </p>
						</div>
                        <?php
                        $sessionusuario = session('sessionusuario');
						$sessionemail = session('sessionemail');
                        $sessiontipo = session('sessiontipo');
                        $sessionidu = session('sessionidu');

                        ?>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
						@if(Session::has('mensaje'))
							<div class="alert alert-info d-flex align-items-center text-center" role="alert">
								<i class="icon-info-with-circle"></i> 
								<div>
								{{Session::get('mensaje')}}
								</div>
							</div>
						@endif
							<div class="form-wrap">
								<div class="tab">
                                <div class="tab-content">
                                <div class="tab-content-inner active" data-content="signup">
                                @if($sessiontipo=="user")
                                <h2 style="color: black;">Bienvenido: <p class="fw-light fst-italic text-center">{{$sessionusuario}}</p></h2>
                                <div class="row form-group">
                                    <a href="{{route('cerrarsesion')}}" class="btn btn-danger" style="color:white"><i class="icon-log-out"></i> Cerrar Sesión</a>
                                </div>
                                @elseif($sessiontipo=="admin")
                                <h2 style="color: black;">Bienvenido Administrador/a {{$sessionusuario}}</h2>
                                <div class="row form-group">
                                    <a href="{{route('iniadmin')}}" class="btn btn-primary" style="color:white">Acceder a Administración</a>
                                    <a href="{{route('cerrarsesion')}}" style="color:rgb(255, 82, 82)" ><i class="icon-log-out"></i> Cerrar Sesión</a>
                                </div>
                                @else
                                        <h3>Iniciar Sesión</h3>
                                        <form action="{{route('valilogin')}}" method="post">
                                        {{csrf_field()}}
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="fullname">Usuario:</label>
                                                    <input type="text" id="usuario" name="usuario" class="form-control" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="fullname">Contraseña:</label>
                                                    <input type="password" id="pasw" name='pasw' class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-primary btn-block" value="Entrar">
                                                </div>
                                            </div>
                                            <a class="" href="{{route('reglogin')}}">Registrarse</a>
                                        </form>	
                                    </div>
                                @endif
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section fondocategorias" id="cate">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="display-1 text-uppercase fw-cold">Elige tu proximo destino!</h2><hr style="border-color: black;">
					<p class="font-monospace text-dark">Nuestros recorridos empiezan en el momento en el que sueñas con viajar. Únete a Amigos de Bolivia y empieza a recibir las mejores opciones para hacerlo realidad.</p>
				</div>
			</div>
			<div class="row">
            @foreach($cate as $item)
				<div class="nuestrocontenedor col-lg-6 col-md-6 col-sm-6 text-center rounded-1 p-0" >
					<a href="{{url('verrec/'.$item->idc)}}">
					<img src="{{asset('imagenesTour/tours/'.$item->image)}}" alt="Avatar" class="nuestraimagen">
					<div class="nuestrobloque">
					<div class="nuestrotexto text-uppercase fw-bold">{{$item->nombre}}</div>
					</div>
					</a>
				</div>
			@endforeach   
			</div>
		</div>
		<br><br><br>
		<div class="container-fluid text-center" >
			<div class="p-5">
				@foreach ($vid as $item)
							<iframe class="p-3" width="560" height="315" src="{{$item->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				@endforeach
			</div>
		</div>
	</div>
	
	
	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/potosi.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="display-t">
				<div class="display-tc">
					<h1>¿Por Que Elegir Potosí?</h1><hr>
					<div class="container w-90 p-4 text-start ">
						<p style="color: aliceblue; text-align: justify;" class="fst-italic">
							<i class="icon-check2" style="color: #ffffff"></i> Villa Imperial se sitúo como la mina de plata más grande del mundo desde mediados del siglo XV hasta mediados del siglo XVII. <br>
							<i class="icon-check2" style="color: #ffffff"></i> Declarada Patrimonio de la Humanidad por la Unesco en 1987 <br>
							<i class="icon-check2" style="color: #ffffff"></i> La UNESCO declaro al Cerro Rico mensajero de la Paz <br>
							<i class="icon-check2" style="color: #ffffff"></i> A nivel nacional, el Estado Boliviano en 1990 lo nomino Monumento Nacional <br>
							<i class="icon-check2" style="color: #ffffff"></i> La OEA declaro a Potosí en 1979 Ciudad Monumento de América <br>
							<i class="icon-check2" style="color: #ffffff"></i> La ciudad de Potosí posee un gran valor histórico y cultural que transcendió por todo el mundo. <br>
							<i class="icon-check2" style="color: #ffffff"></i> Con sus Imponentes templos, casonas y edificios públicos ubicados en angostas calles, llenas de balcones y portadas de piedra, que identifican la tradición cultural colonial. <br>
							<i class="icon-check2" style="color: #ffffff"></i> El Salar de Uyuni, espejo del mundo.  El mayor desierto de sal en el mundo <br>
							<i class="icon-check2" style="color: #ffffff"></i> El Salar de Uyuni  Tiene nominación como la mejor atracción turística natural y como mejor atracción natural de América del Sur. Otorgado por  World Travel Awards (WTA) 2020  <br>
							<i class="icon-check2" style="color: #ffffff"></i> Mejor destino de naturaleza, Salar de Uyuni Otorgado por  World Travel Awards (WTA) 2019 <br>
							<i class="icon-check2" style="color: #ffffff"></i> Parque Nacional Toro Toro fue declarado Patrimonio Cultural Paleontológico, Espeleológico y Arqueológico de Bolivia <br>
							<i class="icon-check2" style="color: #ffffff"></i> Parque Nacional Toro Toro obtiene la Certificación Internacional de Turismo Sostenible Biosphere. <br>
						</p>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box border border-4">
					<h2>Nuestros Servicios</h2>
				</div>
			</div>
			<div class="row">
				<div class="container w-75 p-0 text-start fst-italic" style="color: #ffffff">
					<ul>
					<i class="icon-square-check text-primary"></i>  Planifica paquetes turísticos innovadores <br>
					<i class="icon-square-check text-primary"></i>  Organiza circuitos turísticos a lo largo y ancho del territorio local, departamental y nacional de carácter individual o colectivo, además de brindar toda la infraestructura necesaria para un adecuado servicio. <br>
					<i class="icon-square-check text-primary"></i>  Asesora e informa a los turistas sobre los servicios turísticos requeridos  <br>
					<i class="icon-square-check text-primary"></i>  Presta servicios de guiaje a turistas nacionales y extranjeros<br>
					<i class="icon-square-check text-primary"></i>  Promociona el turismo local, departamental y nacional<br>
					<i class="icon-square-check text-primary"></i>  Brindar una información fidedigna clara y precisa sobre la historia de los atractivos turísticos patrimoniales, culturales. <br>
					<i class="icon-square-check text-primary"></i>  Cuida y conserva el patrimonio turístico <br>
					<i class="icon-square-check text-primary"></i>  Organizamos tours para promociones <br>
					<i class="icon-square-check text-primary"></i>  Organizamos viajes de Estudio <br>
					<i class="icon-square-check text-primary"></i>  Venta de Pasajes de Buses Nacionales e Internacionales  a diferentes partes de Bolivia.<br>
					<i class="icon-square-check text-primary"></i>  Venta de Boletos de Tren a Villazón, Tupiza, Oruro y Uyuni. <br>
					<i class="icon-square-check text-primary"></i>  Realizamos reserva de Hoteles,<br>
					<i class="icon-square-check text-primary"></i>  Venta de Souvenires de Plata<br>
					<i class="icon-square-check text-primary"></i>  Lavandería <br>
					<i class="icon-square-check text-primary"></i>  Garaje <br>
					<i class="icon-square-check text-primary"></i>  Radio Móvil<br>
				</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/quienessomos.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="display-t">
				<div class="display-tc">
					<h1>¿Quienes Somos?</h1><hr>
					<div class="container w-75 p-3 text-center ">
						<h4 class="text-end"><i class="icon-pin" style="color: aliceblue"></i></h4>
						<p style="color: aliceblue; text-align: justify;" class="fw-light fst-italic">La empresa Operadora de Turismo Amigos de Bolivia fue constituida en fecha 15 de diciembre del 2009. Teniendo una trayectoria muy larga en el rubro del turismo, nuestra empresa se debe su trayectoria y crecimiento sostenible gracias a los centenares de agencias de viaje que nos han recomendado y turistas que han realizado tours con nosotros. Un porcentaje muy importante de nuestros clientes nos recomiendan a viajar con nosotros, esto nos da un mensaje muy importante, nuestros índices de satisfacción es gracias al trabajo y dedicación sincera de un grupo de profesionales. <br><br> <i class="icon-megaphone"></i> “Gracias por su confianza. Cooperando al turismo responsable”.
						</p>
					</div>
				</div>	
			</div>
		</div>
	</div>

	

	<div id="gtco-counter" class="gtco-section" style="background-color: rgb(49, 49, 49)">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="text-light">Contactanos!!</h2>
					<p class="text-secondary">Te interesa algun recorrido pero no sabes cual elegir? envianos un mensaje ya!!.</p>
					<a href="{{route('contactos')}}" class=""><img src="images/enviar.png" width="50" heigth="50"></a>  <!--   <h1 class="btncontacto"><i class="icon-phone"></i></h1>-->
				</div><hr>
			</div>
			<div class="row">
				
				<div class="col-md-4 col-sm-7 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<a href="{{route('servicios')}}"><span class="counter js-counter" data-from="0" data-to="{{count($alltour)}}" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label text-light">Destinos</span></a>

					</div>
				</div>
				<div class="col-md-4 col-sm-7 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<a href="{{route('acercade')}}"><span class="counter js-counter" data-from="0" data-to="15" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label text-light">Museos</span></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-7 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<a href="#cate"><span class="counter js-counter" data-from="0" data-to="{{count($cate)}}" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label text-light">Tipos de Tours</span></a>

					</div>
				</div>
					
			</div>
		</div>
	</div>


@endsection