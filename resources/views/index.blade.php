@extends('layouts.principal')

@section('content')

		<section class="content boxed grid2 noarrow">  
						<div class="one-half"> 
							<div class="text">
								<h3><a href="">¡Cotiza en línea!</a></h3>
								<p>Te hacemos fácil la búsqueda y cotización de los productos y servicios que tú necesitas.</p>
								
								<div class="details"> 
									<div><a href="" title="Cotiza" class="button gold full medium solid">¡Cotiza!</a> </div>
								</div>
							</div>
						</div>
						<div class="one-half" style="height: 350px !important;"> <iframe src="https://www.youtube.com/embed/sOnqjkJTMaA" frameborder="0" allowfullscreen=""></iframe> 
						</div> 
		</section>
		
		<!-- Tab navigation -->
			<nav class="tabs two" role="navigation">
				<ul class="wrap">
					<!--<li><a href="contact.html" title="Tell us what you need. We will do the rest.">
						<img src="images/ico1.png" alt="" /> Tell us what you need. <br />We will do the rest.
					</a></li>-->
					<li><a href="" title="Inscribete como proveedor">
						<img src="{{asset('images/ico2.png')}}" alt="" /> Inscribete como proveedor
					</a></li>
					<li><a href="services.html" title="¿Porqué ser un proveedor con nosotros?">
						<img src="{{asset('images/ico3.png')}}" alt="" /> ¿Porqué ser un proveedor con nosotros?
					</a></li>
					<!--<li><a href="#lightSliderPosts" class="anchor" title="Win a Sailing Holiday in Mediterranean!">
						<img src="images/ico4.png" alt="" /> Win a Sailing Holiday in Mediterranean!
					</a></li>-->
				</ul>
			</nav>
			<!-- //Tab navigation -->
		<section class="content boxed grid2 noarrow">
			<ul id="lightSliderDeals">
				<li>  
				<img src="uploads/img.jpg" alt="deal" />  
				</li>
				<li>   
				<img src="uploads/img.jpg" alt="deal" />   
				</li>
				<li>   
				<img src="uploads/img.jpg" alt="deal" />   
				</li>
				<li>   
				<img src="uploads/img.jpg" alt="deal" />   
				</li>
				<li>   
				<img src="uploads/img.jpg" alt="deal" />   
				</li>
				<li>   
				<img src="uploads/img.jpg" alt="deal" />   
				</li>
			</ul>
		</section>
		<!-- //Deals -->
		
		<!-- Testimonials -->
		<section class="testimonials">
			<div class="wrap center">
				<h6>Con nosotros encontrarás la mejor experiencia en busqueda de servicios.</h6>
				<p>Nuestra idea es facilitarte la busqueda presupuesto para los servicios que requieras desde un mismo lugar y de la manera más eficaz </p>
				<p>- ServBroker</p>
			</div>
		</section>
		<!-- //Testimonials -->
		
		<!-- App -->
		<section class="white app">
			<div class="wrap center">
				<h2>Nuestro sistema se adapta a tu dispositivo móvil</h2>
				<p>Nuestra plataforma web se adaptará a cualquier pantalla, bien sea si quieres consultar desde un computador de escritorio o desde cualquier dispositivo teléfonico inteligente, con solo entrar a nuestra web bastará, no tendrás que descargar ninguna aplicación. </p>
				<ol class="custom triplets">
					<li class="wow fadeIn"><strong>Busca a ServBroker</strong><br />Desde cualquier navegador web escribe www.marinelogistics.com y enseguida accederas a nuestros servicios dígitales.</li>
					<li class="wow fadeIn" data-wow-delay=".2s"><strong>Solicita tú cotización</strong><br />Lorem ipsum dolor sit consectetuer adipiscing elit, sed diam nonummy nibh amet .</li>
					<li class="wow fadeIn" data-wow-delay=".4s"><strong>Recibiras respuesta de nuestros proveedores</strong><br />Lorem ipsum dolor sit consectetuer adipiscing elit, sed diam nonummy nibh amet .</li>
				</ol>
			</div>
		</section>
		<!-- Call to action -->
		<section class="cta gold">
			<div class="wrap center">
				<h2>¿No estas convencido?</h2>
				<p>Tenemos una gama de proveedores certificados y con los mejores precios, solicita tu presupuesto y la cotización llegará a tu correo</p>
				<a href="" title="Buy this now" class="button white medium">Solicita tú presupuesto</a>
			</div>
		</section> 
		
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