<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title> @yield('title', 'Aval Rural SGR – Sociedad de Garantía Recíproca')</title>
		@include('partials.meta')
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<link rel="shortcut icon" href="{{ URL::asset('img/logo/logo_aval_rural.ico') }}">

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fontello.css') }} " />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/skeleton.css') }} " />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/plugins.css') }} " />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/base.css') }} " />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }} " />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/stylefaq.css') }} " />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
		{{-- @yield('scripts-headers') --}}

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168566676-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-168566676-1');
		</script>


    </head>


    <body>
        <!-- MODAL RESERVAS LEGALES -->
	@include('partials.pop-reservas-legales')
	<!-- FIN MODAL RESERVAS LEGALES -->
    <div class="ocultar modal-rapper" id="nuevo-precalif">
        @include('partials.pop-precalificate')
    </div>


	<!-- INICIO DE VENTANA MODAL -->



	<!-- FIN DE VENTANA MODAL -->

	<!-- MAIN BACKGROUND -->
	{{-- <div class="buildify_tm_mainbg">
        <!-- PATTERN -->
		<div class="marketify_pattern_overlay"></div>
		<!-- /PATTERN -->
	</div> --}}
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
							@include('partials.top-bar-nav')
							<!-- /TOPBAR -->
							@include('partials.envios-success')
                            @yield('content')


							<!-- QUOTEBOX -->
							@include('partials.enviar-consulta')
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


	<script type="text/javascript" src=" {{ URL::asset('js/jquery.js') }} "></script>
	<script type="text/javascript" src=" {{ URL::asset('js/plugins.js') }} "></script>
	<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
    <script type="text/javascript" src=" {{ URL::asset('js/init.js') }} "></script>
	<script type="text/javascript" src=" {{ URL::asset('js/popup-init.js') }} "></script>
	<script type="text/javascript" src=" {{ URL::asset('js/enviar-contacto.js') }} "></script>
	<script type="text/javascript" src=" {{ URL::asset('js/enviar-contacto-precalificacion.js') }} "></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	@yield('scripts')
    </body>
</html>
