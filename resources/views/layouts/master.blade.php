<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<!-- SEO -->
    <meta name="description" content="" />
    <meta name="keywords" content="diseño de páginas web, diseño de sitios web, páginas web, diseño web, publicidad digital, seo, dcweb, diseño creativo en la web" />
    <meta name="author" content="DCWeb" />

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
	@stack('css')
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>@yield('title') | {{ config('app.name') }}</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="{{ route('home') }}">Agenda tu cita</a></li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="http://www.facebook.com/IconosCIP" class="si-facebook" target="_blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="http://twitter.com/IconosCIP" class="si-twitter" target="_blank"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="http://www.youtube.com/channel/UCeyv9L0FuKYS78rHu6-TYww" class="si-youtube" target="_blank"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">YouTube</span></a></li>
							<li><a href="http://www.instagram.com/imagen_iconos" class="si-instagram" target="_blank"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="http://consultoriaiconos.wordpress.com" class="si-wordpress" target="_blank"><span class="ts-icon"><i class="icon-wordpress"></i></span><span class="ts-text">Blog</span></a></li>
							<li><a href="tel:63604389" class="si-call" target="_blank"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">6360 4389</span></a></li>
							<li><a href="tel:5545542668" class="si-call" target="_blank"><span class="ts-icon"><i class="icon-phone"></i></span><span class="ts-text">044 (55) 4554 2668</span></a></li>
							<li><a href="mailto:info@consultoriaiconos.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@consultoriaiconos.com</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<div id="logo" class="divcenter">
					<a href="{{ route('home') }}" class="standard-logo" data-dark-logo="{{ asset('img/logo-dark.png') }}"><img class="divcenter" src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }} Logo"></a>
					<a href="{{ route('home') }}" class="retina-logo" data-dark-logo="{{ asset('img/logo-dark@2x.png') }}"><img class="divcenter" src="{{ asset('img/logo@2x.png') }}" alt="{{ config('app.name') }} Logo"></a>
				</div><!-- #logo end -->

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<ul>
							<li class="current"><a href="#"><div>Somos</div></a></li>
							<li><a href="#"><div>Servicios</div></a></li>
							<li><a href="#"><div>Manuales</div></a></li>
							<li><a href="#"><div>Conferencias</div></a></li>
							<li><a href="#"><div>Multimedia</div></a></li>
							<li><a href="#"><div>Contacto</div></a></li>
							<li><a href="#"><div>Blog</div></a></li>
						</ul>

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->

		<!-- Slider
		=================================-->
		@yield('slider')

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				@yield('content')

			</div><!-- .content-wrap end -->

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						{{ config('app.name') }} &copy; {{ now()->year }} Todos los derechos reservados.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>

	@stack('js')
</body>
</html>