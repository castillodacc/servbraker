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
			<a href="index.html" title="Marine Logistic" class="logo"><img class="logo" src="{{asset('images/logo.jpg')}}"></a>
			<!-- //Logo -->
			
			<!-- Primary menu -->
			<nav class="main-nav" role="navigation">
				<ul class="jetmenu" id="jetmenu">
					<li><a href="" title="News">Sobre Nosotros</a></li>
					<li><a href="" title="Services">Servicios</a></li>
					</li>
					<li><a href="" title="Galería de Imágenes">Galería</a></li>
					<!--<li><a href="" title="">Pages</a>
						<div class="megamenu full-width">
							<div class="wrap">
								<div class="row">
									<div class="col one-fourth">
										<p>Static templates</p>
										<ul>
											<li><a href="page-left-sidebar.html" title="Page with left sidebar">Page with left sidebar</a></li>
											<li><a href="page-right-sidebar.html" title="Page with right sidebar">Page with right sidebar</a></li>
											<li><a href="page-both-sidebars.html" title="Page with both sidebars">Page with both sidebars</a></li>
											<li><a href="page-no-sidebar.html" title="Page with no sidebars">Page with no sidebars</a></li>
										</ul>
									</div>
									<div class="col one-fourth">
										<p>Special pages</p>
										<ul>
											<li><a href="404.html" title="Error 404">Error 404</a></li>
											<li><a href="login.html" title="Login">Login</a></li>
											<li><a href="register.html" title="Register">Register</a></li>
											<li><a href="account.html" title="My account">My account</a></li>
										</ul>
									</div>
									<div class="col one-fourth">
										<p>Corporate pages</p>
										<ul>
											<li><a href="crew.html" title="Crew">Crew</a></li>
											<li><a href="services.html" title="Services">Services</a></li>
											<li><a href="contact.html" title="Contact">Contact</a></li>
											<li><a href="faq.html" title="Faq">Faq</a></li>
										</ul>
									</div>
									<div class="col one-fourth">
										<p>Special pages</p>
										<ul>
											<li><a href="charters.html" title="Charter yachts">Charter yachts</a></li>
											<li><a href="yacht-single.html" title="Yacht info + booking">Yacht info + booking</a></li>
											<li><a href="sales.html" title="Yachts for sale">Yachts for sale</a></li>
											<li><a href="yacht-sale-single.html" title="Yacht sale info">Yacht for sale info</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>-->
					
					<li><a href="" title="Solicite su Presupuesto" class="search-trigger">Solicitudes</a></li>
					<li><a href="/condtacto" title="Galería de Imágenes">Contactanos</a></li>
					<li><a href="" title="Registrarse o ingresar">Registrarse</a>
						<ul class="dropdown">
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
		<div class="hero" style="background-image:url({{asset('uploads/hero.jpg')}});">
			<article>
				<h1 class="wow fadeInDown">Marine Logistics te ofrece lo mejor...</h1>
				<a href="" title="Revisa nuestros servicios" class="anchor button white medium wow fadeInUp">Revisa nuestros servicios</a>
			</article>
		</div>
		<!-- //Hero -->
		
		<!-- Tab navigation -->
			<nav class="tabs two" role="navigation">
				<ul class="wrap">
					<!--<li><a href="contact.html" title="Tell us what you need. We will do the rest.">
						<img src="images/ico1.png" alt="" /> Tell us what you need. <br />We will do the rest.
					</a></li>-->
					<li><a href="" title="Check our Early Season Mediterranean Deals.">
						<img src="{{asset('images/ico2.png')}}" alt="" /> Traza tu ruta con nosotros, solicita presupuesto acá.
					</a></li>
					<li><a href="services.html" title="New to Sailing? We‘ve got you covered.">
						<img src="{{asset('images/ico3.png')}}" alt="" /> ¿Perdido?<br />Tú brújula apunta hacía nosotros.
					</a></li>
					<!--<li><a href="#lightSliderPosts" class="anchor" title="Win a Sailing Holiday in Mediterranean!">
						<img src="images/ico4.png" alt="" /> Win a Sailing Holiday in Mediterranean!
					</a></li>-->
				</ul>
			</nav>
			<!-- //Tab navigation -->
		
		<!-- Call to action -->
		<section class="cta gold">
			<div class="wrap center">
				<h2>¿No estas convencido?</h2>
				<p>Tenemos una gama de proveedores certificados y con los mejores precios, solicita tu presupuesto y la cotización llegará a tu correo</p>
				<a href="" title="Buy this now" class="button white medium">Solicita tú presupuesto</a>
			</div>
		</section>
		<!-- //Call to action -->
		
		<!-- Deals -->
		<section class="content boxed grid2 noarrow">
			<ul id="lightSliderDeals">
				<li>
					<!-- Item -->
					<article class="full-width hentry">
						<figure class="one-half heightfix"><a href=""><img src="uploads/img.jpg" alt="deal" /></a></figure>
						<div class="one-half heightfix">
							<header>Servicios exclúsivos</header>
							<div class="text">
								<h3><a href="">Anclaje</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam aliquip ex ea commodoerat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>
								
								<div class="details">
									<div>
										<span class="icojam_location_1"></span>
										<p>Base: Puerto antofagasta</p>
									</div>
									<div>
										<span class="icojam_friends"></span>
										<p>Intervienen: 10 profesionales</p>
									</div>
									<div class="price">$ 130,00 a $ 900,00</div>
									<div><a href="" title="Book now" class="button gold full medium solid">Solicita Presupuesto</a> </div>
								</div>
							</div>
						</div>
					</article>
					<!-- //Item -->
				</li>
				<li>
					<!-- Item -->
					<article class="full-width hentry">
						<figure class="one-half heightfix"><a href=""><img src="uploads/img.jpg" alt="deal" /></a></figure>
						<div class="one-half heightfix">
							<header>Our Exclusive Deals</header>
							<div class="text">
								<h3><a href="">Elan 1923 Impression</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam aliquip ex ea commodoerat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>
								
								<div class="details">
									<div>
										<span class="icojam_location_1"></span>
										<p>Base: Marina Kaštela</p>
									</div>
									<div>
										<span class="icojam_friends"></span>
										<p>Berths: 10 (8+2)</p>
									</div>
									<div class="price">$ 5300,00</div>
									<div><a href="" title="Book now" class="button gold full medium solid">Book now</a> </div>
								</div>
							</div>
						</div>
					</article>
					<!-- //Item -->
				</li>
				<li>
					<!-- Item -->
					<article class="full-width hentry">
						<figure class="one-half heightfix"><a href=""><img src="uploads/img.jpg" alt="deal" /></a></figure>
						<div class="one-half heightfix">
							<header>Our Exclusive Deals</header>
							<div class="text">
								<h3><a href="">Elan 1923 Impression</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam aliquip ex ea commodoerat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>
								
								<div class="details">
									<div>
										<span class="icojam_location_1"></span>
										<p>Base: Marina Kaštela</p>
									</div>
									<div>
										<span class="icojam_friends"></span>
										<p>Berths: 10 (8+2)</p>
									</div>
									<div class="price">$ 5300,00</div>
									<div><a href="" title="Book now" class="button gold full medium solid">Book now</a> </div>
								</div>
							</div>
						</div>
					</article>
					<!-- //Item -->
				</li>
			</ul>
		</section>
		<!-- //Deals -->
		
		<!-- Testimonials -->
		<section class="testimonials">
			<div class="wrap center">
				<h6>Con nosotros encontrarás la mejor experiencia en servicios portuarios.</h6>
				<p>En Marine Logistic tenemos como misión conectar personas de cualquier parte del mundo a través de nuestros servicios portuarios. </p>
				<p>- Marine Logistic</p>
			</div>
		</section>
		<!-- //Testimonials -->
		
		<!-- App -->
		<section class="white app">
			<div class="wrap center">
				<h2>Nuestro sistema se adapta a tu dispositivo móvil</h2>
				<p>Nuestra plataforma web se adaptará a cualquier pantalla, bien sea si quieres consultar desde un computador de escritorio o desde cualquier dispositivo teléfonico inteligente, con solo entrar a nuestra web bastará, no tendrás que descargar ninguna aplicación. </p>
				<ol class="custom triplets">
					<li class="wow fadeIn"><strong>Busca a Marine Logistic</strong><br />Desde cualquier navegador web escribe www.marinelogistics.com y enseguida accederas a nuestros servicios dígitales.</li>
					<li class="wow fadeIn" data-wow-delay=".2s"><strong>Solicita tu presupuesto</strong><br />Lorem ipsum dolor sit consectetuer adipiscing elit, sed diam nonummy nibh amet .</li>
					<li class="wow fadeIn" data-wow-delay=".4s"><strong>Recibiras respuesta pronto</strong><br />Lorem ipsum dolor sit consectetuer adipiscing elit, sed diam nonummy nibh amet .</li>
				</ol>
			</div>
		</section>
		<!-- //App -->
		
		<!-- Photo -->
		<!--<section class="photo">
			<div class="wrap center">
				<h2>Find out more about our sailing destinations, marinas and suggested itineraries</h2>
				<p>Wild, exotic and remote; cosmopolitan and cutting-edge; untouched and tranquil, <br />discover our incredible sailing destinations. <br />See the world. Differently.</p>
				<a href="destinations.html" title="Find out more" class="button white medium">Find out more</a>
			</div>
		</section>-->
		<!-- //Photo -->
			
		
		<!-- Call to action -->
		<section class="cta grey">
			<div class="wrap">
				<a href="" title="I am convinced" class="button white medium right">Me quiero registrar</a>
				<h3>Registrate en nuestro sistema integral para solicitud de cotizaciones</h3>
			</div>
		</section>
		<!-- //Call to action -->

		<!-- Services -->
		<section class="white icons">
			<div class="wrap">
				<div class="row">
					<!-- Item -->
					<div class="one-fourth wow fadeIn">
						<a href="#" class="circle large border">
							<span class="icojam_compas_2"></span>
						</a>
						<h4><a href="#">Our sailing destinations</a></h4>
						<p>Lorem ipsum dolor sit amet, sectetuer adipiscing elit, sed diam nonumy nib.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-fourth wow fadeIn" data-wow-delay=".2s">
						<a href="#" class="circle large border">
							<span class="icojam_map_3"></span>
						</a>
						<h4><a href="#">Where to sail guide</a></h4>
						<p>Lorem ipsum dolor sit amet, sectetuer adipiscing elit, sed diam nonumy nib.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-fourth wow fadeIn" data-wow-delay=".4s">
						<a href="#" class="circle large border">
							<span class="icojam_tags_1"></span>
						</a>
						<h4><a href="#">Our yachts and pricing</a></h4>
						<p>Lorem ipsum dolor sit amet, sectetuer adipiscing elit, sed diam nonumy nib.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-fourth wow fadeIn" data-wow-delay=".6s">
						<a href="#" class="circle large border">
							<span class="icojam_pupil_boy"></span>
						</a>
						<h4><a href="#">New to sailing?</a></h4>
						<p>Lorem ipsum dolor sit amet, sectetuer adipiscing elit, sed diam nonumy nib.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-fourth wow fadeIn">
						<a href="#" class="circle large border">
							<span class="icojam_anchor"></span>
						</a>
						<h4><a href="#">Sail with a skipper</a></h4>
						<p>Lorem ipsum dolor sit amet, sectetuer adipiscing elit, sed diam nonumy nib.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-fourth wow fadeIn" data-wow-delay=".2s">
						<a href="#" class="circle large border">
							<span class="icojam_certificate"></span>
						</a>
						<h4><a href="#">Skipper training</a></h4>
						<p>Lorem ipsum dolor sit amet, sectetuer adipiscing elit, sed diam nonumy nib.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-fourth wow fadeIn" data-wow-delay=".4s">
						<a href="#" class="circle large border">
							<span class="icojam_holliday"></span>
						</a>
						<h4><a href="#">Beach club</a></h4>
						<p>Lorem ipsum dolor sit amet, sectetuer adipiscing elit, sed diam nonumy nib.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-fourth wow fadeIn" data-wow-delay=".6s">
						<a href="#" class="circle large border">
							<span class="icojam_airdrop"></span>
						</a>
						<h4><a href="#">Flotilla sailing</a></h4>
						<p>Lorem ipsum dolor sit amet, sectetuer adipiscing elit, sed diam nonumy nib.</p>
					</div>
					<!-- //Item -->
				</div>
			</div>
		</section>
		<!-- //Services -->
			 
		
		<!-- Call to action -->
		<section class="cta gold">
			<div class="wrap center">
				<h2>¿Tienes dudas?</h2>
				<p>Si tienes dudas, contacta directamente con nosotros, te ayudaremos y asesoramos en aquello que no te queda claro sobre nuestros servicios.</p>
				<a href="" title="Contactanos" class="button white medium">Contactanos ahora</a>
			</div>
		</section>
		<!-- //Call to action -->
		
		<!-- Yachts -->
		 
		<!-- //Yachts -->
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