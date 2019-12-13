<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <title>Aval Rural SGR – Sociedad de Garantía Recíproca</title>
        <!-- Fonts -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta description="Aval Rural es una Sociedad de Garantía Recíproca autorizada por la Sepyme, miembro del grupo Cofco Intl e integrada por MiPyMEs de diferentes sectores.">
        <meta name="keywords" content="avales, aval, rural, aval rural, fideicomisos, préstamos, cheque, noticias agro, noticias campo, COFCO International Argentina S.A., avales COFCO, fideicomisos financieros, endeudamiento, préstamos, bonos.">
        <link rel="shortcut icon" href="img/logo/logo_aval_rural.ico">
        <link rel="stylesheet" type="text/css" href="css/fontello.css" />
        <link rel="stylesheet" type="text/css" href="css/skeleton.css" />
        <link rel="stylesheet" type="text/css" href="css/plugins.css" />
        <link rel="stylesheet" type="text/css" href="css/base.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
    </head>
    

<body>
	<!-- MODAL RESERVAS LEGALES -->
	<div class="modal-wrapper" id="popup-legales">
	   <div class="popup-contenedor-legales">
		  <h6>Reservas Legales</h6>
		  <hr>
		  <p>La información y los materiales contenidos en este sitio se proporcionan, tal como son. Cofco Intl. no se asegura ni garantiza que los mismos sean exactos, suficientes o completos y niega expresamente toda responsabilidad que se le pudiera imputar por los errores y/u omisiones en la información y materiales contenidos en este sitio y/o por cualquier uso y acto realizado como consecuencia o en confianza de la información y los materiales publicados en el sitio web. Ningún tipo de garantía, ni expresa ni tacita, es otorgada por la información y los materiales publicados en este sitio web. Cofco Intl. y ciertos subsidiarios de Cofco compran o venden commodities por su propia cuenta, basándose en la información contenida en este sitio web y en cualquier momento pueden poseer o tener contratos que lo obliguen a entregar tales commodities o a hacer pagos con respecto a la información relativa a dichos commodities, y/o dándoles derechos a recibir tales materiales o a recibir pagos con respecto a la información relativa a ellos. Cofco y/o sus subsidiarios y afiliados podrán tomar posiciones que sean diferentes u opuestas a las posiciones tratadas en el presente. La información contenida en este sitio web es proporcionada en forma gratuita solamente a fines informativos y no con la intención de ser tomada como oferta, solicitud o recomendación con respecto a cualquier transacción que involucre a cualquier commodity. Cofco Intl. no es asesor comercial de commodities ni comisionista de mercados a futuro. Cofco Intl. proporciona la información contenida en este sitio web solamente en lo que incide a su negocio en el mercado de capitales. Cualquier información con respecto al intercambio y negocio de contratos a futuro y de opciones se proporciona solamente como una conveniencia a los usuarios de este sitio del web y no genera ningún tipo de obligación contractual o extracontractual hacia Cofco Intl., bajo ningún concepto.</p>
		  <hr>
		  <a class="popup-cerrar" href="#">X</a>
	   </div>
	</div>
	<!-- FIN MODAL RESERVAS LEGALES -->
	
	<!-- INICIO DE VENTANA MODAL -->
	<div id="popup" class="modal-wrapper"></div>
	<!-- FIN DE VENTANA MODAL -->
	
	<!-- MAIN BACKGROUND -->
	<div class="buildify_tm_mainbg">
		<!-- PATTERN -->
		<div class="marketify_pattern_overlay"></div>
		<!-- /PATTERN -->
	</div>
	<!-- /MAIN BACKGROUND -->
	
	<!-- WRAPPER ALL -->
	<div class="buildify_tm_wrapper_all">
		<div class="buildify_tm_wrapper">
			<div class="buildify_tm_animate_submenu"></div>
			<!-- LEFTPART -->
			<div class="buildify_tm_leftpart_wrap">
				<!-- LEFT PATTERN -->
				<div class="buildify_tm_build_pattern"></div>
				<!-- /LEFT PATTERN -->
				
				<!-- MENUBAR -->
                @include('partials.lateral-nav-bar')
				<!-- /MENUBAR -->
			</div>
			<!-- /LEFTPART -->
			
			<!-- RIGHTPART -->
			<div class="buildify_tm_rightpart_wrap">
				<div class="buildify_tm_rightpart">
					
					<!-- CONTENT -->
					<div class="buildify_tm_content_wrap">
						<div class="buildify_tm_content">
							
							<!-- TOPBAR -->
							<!-- /TOPBAR -->
							
							<!-- HEADER -->
							@include('partials.top-bar-nav')
							<!-- /HEADER -->
							
							<!-- /SHORT SERVICES -->
							<div class="buildify_tm_section">
								<div class="about_list">
									<div class="buildify_tm_short_services_wrap">
										<div class="container">
											<div class="badge">
												<a href="#popup" class="popup-link"><span>Precalificate aquí</span></a>
											</div>
										</div>
										<div class="container">
											<div class="prev_next">
												<div class="tm_next_button"></div>
												<div class="tm_prev_button"></div>
											</div>
										</div>
										<div class="container">
											<div class="swiper-pagination my_swiper_pagination"></div>
										</div>
										<div class="buildify_tm_universal_swiper_wrap">
											<div class="swiper-container">
												<div class="buildify_tm_articles_wrap swiper-wrapper">
													<div class="article_inner swiper-slide">
														<div class="article_image first">
															<div class="overlay"></div>
														</div>
													</div>
													<div class="article_inner swiper-slide">
														<div class="article_image second">
															<div class="overlay"></div>
														</div>
													</div>
													<div class="article_inner swiper-slide">
														<div class="article_image third">
															<div class="overlay"></div>
														</div>
													</div>
													<div class="article_inner swiper-slide">
														<div class="article_image fourth">
															<div class="overlay"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="buildify_tm_short_service_list">
										<div class="container">
											<div class="buildify_tm_list_wrap" data-column="3" data-space="30">
												<ul class="buildify_list">
													<li>
														<div class="list_inner">
															<div class="image_holder">
																<img src="img/services/370x240.jpg" alt="" />
																<div class="main_image first"></div>
															</div>
															<div class="titles_holder">
																<div class="title">
																	<h3><a href="producto_garantias.html">¿Buscás una garantía?</a></h3>
																</div>
																<div class="definition">
																	<p>En Aval SGR contamos con las mejores condiciones de financiamiento para tu pyme.</p>
																</div>
																<div class="read_more">
																	<a href="producto_garantias.html">Ver más</a>
																</div>
															</div>
														</div>
													</li>
													<li>
														<div class="list_inner">
															<div class="image_holder">
																<img src="img/services/370x240.jpg" alt="" />
																<div class="main_image second"></div>
															</div>
															<div class="titles_holder">
																<div class="title">
																	<h3><a href="#popup" class="popup-link">Precalificate</a></h3>
																</div>
																<div class="definition">
																	<p>Accede al formulario, completá los datos y un asesor se comunicará con vos a la brevedad.</p>
																</div>
																<div class="read_more">
																	<a href="#popup" class="popup-link">Ver Más</a>
																</div>
															</div>
														</div>
													</li>
													<li>
														<div class="list_inner">
															<div class="image_holder">
																<img src="img/services/370x240.jpg" alt="" />
																<div class="main_image third"></div>
															</div>
															<div class="titles_holder">
																<div class="title">
																	<h3><a href="que_es_una_sgr.html">¿Qué es una SGR?</a></h3>
																</div>
																<div class="definition">
																	<p>Conocé todo lo que podés hacer con nuestro AVAL.</p>
																</div>
																<div class="read_more">
																	<a href="que_es_una_sgr.html">Ver más</a>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /SHORT SERVICES -->
							
							<!-- FEATURED WORKS -->
							<div class="buildify_tm_section">
								<div class="buildify_tm_featured_works_wrap">
									<div class="container">
										<div class="buildify_tm_universal_carousel_wrap">
											<div class="title_holder">
												<div class="span">
													<h3>Nuestros productos</h3>
												</div>
												<div class="carousel_nav">
													<div class="custom_nav">
														<a href="#" class="prev"></a>
														<a href="#" class="next"></a>
													</div>
												</div>
											</div>
											<div class="main_carousel_wrap">
												<ul class="owl-carousel gallery_zoom">
													<li class="item">
														<div class="image_holder">
															<img src="img/portfolio/370x280.jpg" alt="" />
															<div class="main_image third"></div>
															<div class="overlay_color">
																<div class="overlay_title">
																	<span><a href="producto_cheque.html">Cheques</a></span>
																</div>
															</div>
														</div>
													</li>
													<li class="item">
														<div class="image_holder">
															<img src="img/portfolio/370x280.jpg" alt="" />
															<div class="main_image fourth"></div>
															<div class="overlay_color">
																<div class="overlay_title">
																	<span><a href="producto_pagares.html">Pagarés</a></span>
																</div>
															</div>
														</div>
													</li>
													<li class="item">
														<div class="image_holder">
															<img src="img/portfolio/370x280.jpg" alt="" />
															<div class="main_image fifth"></div>
															<div class="overlay_color">
																<div class="overlay_title">
																	<span><a href="producto_bancos.html">Bancos</a></span>
																</div>
															</div>
														</div>
													</li>
													<li class="item">
														<div class="image_holder">
															<img src="img/portfolio/370x280.jpg" alt="" />
															<div class="main_image sixth"></div>
															<div class="overlay_color">
																<div class="overlay_title">
																	<span><a href="producto_obligaciones.html">Obligaciones Negociables Simples</a></span>
																</div>
															</div>
														</div>
													</li>
													<li class="item">
														<div class="image_holder">
															<img src="img/portfolio/370x280.jpg" alt="" />
															<div class="main_image second"></div>
															<div class="overlay_color">
																<div class="overlay_title">
																	<span><a href="producto_fideicomisos.html">Fideicomisos Financieros</a></span>
																</div>
															</div>
														</div>
													</li>
													<li class="item">
														<div class="image_holder">
															<img src="img/portfolio/370x280.jpg" alt="" />
															<div class="main_image first "></div>
															<div class="overlay_color">
																<div class="overlay_title">
																	<span><a href="producto_garantias.html">Garantías Comerciales</a></span>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /FEATURED WORKS -->
							
							<!-- NEWS -->
							<div class="buildify_tm_section">
							<div class="buildify_tm_news_wrap">
								<div class="container">
									<div class="buildify_tm_universal_carousel_wrap">
										<div class="title_holder light">
											<div class="span">
												<h3>Ultimas Noticias</h3>
											</div>
										</div>
										<div class="buildify_tm_list_wrap" data-column="3" data-space="0">
											<ul class="buildify_list buildify_tm_miniboxes">
												<li class="buildify_tm_minibox">
													<div class="inner pointer">
														<div class="image_news">
															<img class="svg" src="img/img_noticias/nuevos_limites_10-192.png" alt="" />
														</div>
														<div class="main_part">
															<div class="title_holder_news">
																<h3><a href="nuevos_limites_pyme.html">Nuevos Límites PYME Resolución 563/201– SEPYME</a></h3>
															</div>
															<div class="definition">
																<p>El día 6 de diciembre se publicó en el B.O. la Resolución 563/2019 de la Secretaría de Emprendedores y de la Pequeña y Mediana Empresa...</p>
															</div>
															<div class="read_more_news">
																<p><a href="nuevos_limites_pyme.html">Ver más</a><span>Diciembre 2019</span></p>
															</div>
														</div>
													</div>
												</li>
												<li class="buildify_tm_minibox">
													<div class="inner pointer">
														<div class="image_news">
															<img class="svg" src="img/img_noticias/cond_aval_10-19.png" alt="" />
														</div>
														<div class="main_part">
															<div class="title_holder_news">
																<h3><a href="condiciones_aval_10-19.html">Condiciones Aval Rural Diciembre 2019</a></h3>
															</div>
															<div class="definition">
																<p>DESCUENTO de CHEQUES de PAGO DIFERIDO</p>
															</div>
															<div class="read_more_news">
																<p><a href="condiciones_aval_10-19.html">Ver más</a><span>Diciembre 2019</span></p>
															</div>
														</div>
													</div>
												</li>
												<li class="buildify_tm_minibox">
													<div class="inner pointer">
														<div class="image_news">
															<img class="svg" src="img/img_noticias/img_mini_noticia_7-6.png" alt="" />
														</div>
														<div class="main_part">
															<div class="title_holder_news">
																<h3><a href="las_pymes_se_financian.html">Las pymes se financiaron en el mercado por un récord histórico durante mayo.</a></h3>
															</div>
															<div class="definition">
																<p>De acuerdo al informe del Mav se negociaron en el último mes cheques por un total de $9.646 millones.</p>
															</div>
															<div class="read_more_news">
																<p><a href="las_pymes_se_financian.html">Ver más</a><span>Junio 2019</span></p>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
							<!-- /NEWS -->
							
							<!-- QUOTEBOX -->
							<div class="buildify_tm_section">
								<div class="buildify_tm_quotebox">
									<div class="container">
										<div class="inner">
											<h3 class="text">Enviá tu <a href="contact.html">consulta</a></h3>
											<span class="pattern"></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /QUOTEBOX -->
							
						</div>
					</div>
					<!-- /CONTENT -->
					
					<!-- FOOTER -->
					@include('partials.footer')
					<!-- /FOOTER -->
				</div>
			</div>
			<!-- /RIGHTPART -->
		</div>
	</div>
	<!-- / WRAPPER ALL -->
	
	

    <!-- SCRIPTS -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
	<script type="text/javascript" src="js/popup-init.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- /SCRIPTS -->
    </body>
</html>
