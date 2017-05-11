@extends('layouts.principal')

@section('content')
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

		@stop