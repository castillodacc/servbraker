<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />  
	
	<title>ServBroker - Inicio</title>
	
	<link rel="stylesheet" href="{{asset('css/style.css')}}" />
	<link rel="stylesheet" href="{{asset('css/fonts.css')}}" />
	<link rel="stylesheet" href="{{asset('css/lightSlider.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" />

	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Raleway:400,500,600,700&amp;subset=latin,greek,cyrillic,vietnamese' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="{{asset('images/faviconML.ico')}}" /> 
  </head>
  <body class="home">
	<!-- Preloader -->
	<div class="preloader">
		<div>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- //Preloader -->
	
	<!-- Header -->
	<header class="header" role="banner">
		<div class="wrap">
			<!-- Logo -->
			<a href="/" title="Marine Logistic" class="logo"><img class="logo" src="{{asset('images/logo.jpg')}}"></a>
			<!-- //Logo -->
			
			<!-- Primary menu -->
			<nav class="main-nav" role="navigation">
				<ul class="jetmenu" id="jetmenu">
					<li><a href="/nosotros" title="Nosotros">Sobre Nosotros</a></li>
					<li><a href="" title="Services">Servicios</a></li></li>
					<!--<li><a href="" title="Galería de Imágenes">Galería</a></li>
					--><li><a href="" title="Solicite su Presupuesto" class="search-trigger">Solicitudes</a></li>
					<!--<li><a href="/contact" title="Galería de Imágenes">Contactanos</a></li>
					<li><a href="" title="Registrarse o ingresar">Registrarse</a>
					-->	<ul class="dropdown">
							<li><a href="" title="Registrarse">Registrarse</a></li>
							<li><a href="" title="Ingresar al Sistema">Ingresar</a></li> 
						</ul>
					</li>
				</ul>
				
				<!-- Search -->
				<form class="advanced-search" action="charters.html">
					<div class="wrap">
						<div>
							<select>
								<option selected>Select location</option>
								<option>Caribbean</option>
								<option>Mediterranean</option>
								<option>Indian Ocean</option>
								<option>South Pacific</option>
								<option>South East Asia</option>
								<option>South America</option>
								<option>North America</option>
								<option>Northern Europe</option>
							</select>
						</div>
						<div>
							<input type="text" id="startDate" />
						</div>
						<div>
							<select>
								<option selected>Duration</option>
								<option>1 week</option>
								<option>2 weeks</option>
								<option>3 weeks</option>
								<option>4 weeks</option>
							</select>
						</div>
						<div>
							<select>
								<option selected>Cabins</option>
								<option>3 or less</option>
								<option>4 - 6</option>
								<option>6 or more</option>
							</select>
						</div>
						<div>
							<select>
								<option selected>Yacht type</option>
								<option>Motor yacht</option>
								<option>Sailing yacht</option>
							</select>
						</div>
						<div><input type="submit" id="as-submit" class="button gold full" value="Search yachts" /></div>
						<a href="" class="search-hide" title="Hide this box">Hide this box</a>
					</div>
				</form>
				<!-- //Search -->
			</nav>
			<!-- //Primary menu -->
		</div>
	</header>
	<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		<!-- Hero -->
		@yield('content') 
	</main>
	<!-- //Main -->
	
	<!-- Bottom Sidebar -->
	
	<!-- //Bottom Sidebar -->
	
	<!-- Footer -->
	<footer class="footer" role="contentinfo">
		<!-- Wrapper -->
		<div class="wrap">
			<div class="row">
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>Nosotros</h6>
					<p>Marine Logistic<br />Chile</p>
					<p> 1-555-555-555<br /><a href="mailto:marinelogistics@marinelogistics.com">Marinelogistics@marinelogistics.com</a></p>
				</div>
				<!-- //OneFourth -->
				
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>¿Porqué somos la mejor opción?</h6>
					<ul class="check">
						<li><a href="#">Seguridad en cada servicio</a></li>
						<li><a href="#">Mejores precios</a></li> 
						<li><a href="#">Soluciones exclusivas</a></li> 
					</ul>
				</div>
				<!-- //OneFourth -->
				
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>¿Necesitas Ayuda?</h6>
					<ul>
						<li><a href="#">Preguntas</a></li>  
						<li><a href="#">Política de Privacidad</a></li>
						<li><a href="#">Terminos y condiciones</a></li>
					</ul>
				</div>
				<!-- //OneFourth -->
				
				<!-- OneFourth -->
				<div class="one-fourth">
					<h6>Siganos en nuestras redes</h6>
					<p>Nuestras redes sociales le mantendrán informado y contacto con nuestros dinámica diaria de servicios ofrecidos.</p>
					<a href="#" title="Facebook" class="circle"><i class="fa fa-facebook fa-fw"></i></a> 
					<a href="#" title="Twitter" class="circle"><i class="fa fa-twitter fa-fw"></i></a>
					<a href="#" title="Youtube" class="circle"><i class="fa fa-youtube-play fa-fw"></i></a> 
				</div>
				<!-- //OneFourth -->
			</div>
		</div>
		<!-- //Wrapper -->
		
		<div class="copy">
			<!-- Wrapper -->
			<div class="wrap">
				<p>Copyright 2017 Marine Logistic, todos los derechos reservados.</p>
				<p>Por <a href="" title="">Castillovox</a></p>
			</div>
			<!-- //Wrapper -->
		</div>
	</footer>
	<!-- //Footer -->
	
	<!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/jetmenu.js')}}"></script>
	<script src="{{asset('js/jquery.uniform.min.js')}}"></script>
	<script src="{{asset('js/jquery.lightSlider.min.js')}}"></script>
	<script src="{{asset('js/wow.min.js')}}"></script>
	<script src="{{asset('js/scripts.js')}}"></script>
	<script>
		 $(document).ready(function() {
			$("#lightSliderPosts").lightSlider({
				item:1,
				keyPress:true,
				gallery:false,
				pager:false,
				prevHtml: 'PREVIOUS',
				nextHtml: 'NEXT'
			});
			
			$("#lightSliderDeals").lightSlider({
				item:1,
				keyPress:true,
				gallery:false,
				pager:false,
				prevHtml: 'PREVIOUS',
				nextHtml: 'NEXT'
			});
			
			new WOW().init();
		});
	</script>
  </body>
</html>