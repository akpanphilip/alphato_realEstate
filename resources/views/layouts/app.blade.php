<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="{{asset('tem_files/images/logo.png')}}">
	<link rel="icon" href="{{asset('tem_files/images/logo.png')}}">

	<!--Stylesheets-->
	<link rel="stylesheet" href="{{ asset('tem_files/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('tem_files/plugins/revolution/css/settings.css')}}">
	<link rel="stylesheet" href="{{ asset('tem_files/plugins/revolution/css/layers.css')}}">
	<link rel="stylesheet" href="{{ asset('tem_files/plugins/revolution/css/navigation.css')}}">
	<link rel="stylesheet" href="{{ asset('tem_files/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('tem_files/css/responsive.css')}}">
	<link rel="stylesheet" href="{{ asset('tem_files/css/owl.css')}}">
	<link rel="stylesheet" href="{{ asset('tem_files/css/owl.default.css')}}">

	<!--Color Themes-->
	<link rel="stylesheet" href="{{ asset('tem_files/css/default-theme.css')}}">
</head>
<body>
	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header-->
		<header class="main-header">

			<!--Header Top-->
			<div class="header-top">
				<div class="auto-container">
					<div class="clearfix">
						<div class="top-left">
						</div>
						<div class="top-right clearfix">
							<ul class="clearfix">
								<li>Follow us
									<div class="social-links">
										<a href="#"><span class="fab fa-instagram"></span></a>
										<a href="#"><span class="fab fa-facebook-f"></span></a>
										<a href="#"><span class="fab fa-linkedin"></span></a>
										<a href="#"><span class="fab fa-pinterest"></span></a>
										<a href="#"><span class="fab fa-twitter"></span></a>
										<a href="#"><span class="fab fa-youtube"></span></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!--Header-Upper-->
			<div class="header-upper">
				<div class="auto-container clearfix">
					<div class="pull-left logo-outer">
						<div class="logo"><a href="/"><img src="{{asset('tem_files/images/logo.png')}}" alt="Aizen - Architecture Template" title="Aizen - Architecture Template"></a></div>
					</div>
					<div class="pull-right upper-right clearfix">
						<nav class="main-menu">
							<div class="navbar-header">
								<!-- Toggle Button -->
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse clearfix">
								<ul class="navigation clearfix">
									<li><a href="/">Home</a></li>
									<li><a href="{{ route('about')}}">About Us</a></li>
									<li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('team')}}">Team</a></li>
                                    <li><a href="{{route('testimonials')}}">Testimonials</a></li>
									{{-- <li><a href="{{route('contact')}}">Contact</a></li> --}}
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!--Sticky Header-->
			<div class="sticky-header">
				<div class="auto-container clearfix">
					<!--Logo-->
					<div class="logo pull-left">
						<a href="/" class="img-responsive"><img src="{{asset('tem_files/images/logo-small.png')}}" alt="Aizen - Architecture Template" title="Aizen - Architecture Template"></a>
					</div>
					<!--Right Col-->
					<div class="right-col pull-right">

						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-header">
								<!-- Toggle Button -->
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse clearfix">
								<ul class="navigation clearfix">
									<li><a href="/">Home</a></li>
									<li><a href="{{route('about')}}">About Us</a></li>
									<li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('team')}}">Team</a></li>
                                    <li><a href="{{route('testimonials')}}">Testimonials</a></li>
									{{-- <li><a href="{{route('contact')}}">Contact</a></li> --}}
								</ul>
							</div>
						</nav>
						<!-- Main Menu End-->
					</div>
				</div>
			</div>
			<!--End Sticky Header-->

		</header>
		<!--End Main Header -->

        @yield('content')

		<!--Main Footer-->
		<footer class="main-footer">
			<!--Widgets Section-->
			<div class="widgets-section">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="column col-md-12 col-sm-12 col-xs-12">
							<div class="row clearfix">

								<!--Footer Column-->
								<div class="footer-column col-md-4 col-sm-6 col-xs-12">
									<div class="footer-widget logo-widget">
										<div class="logo">
											<a href="/"><img src="{{asset('tem_files/images/footer-logo.png')}}" alt=""></a>
										</div>
										{{-- <div class="widget-content">
											<div class="text">Alphato Construction & Property Development is a property construction and
                                                developmentcorporation with headquarters in Abuja Nigeria with primary engagement in
                                                property development and investment.</div>
										</div> --}}
									</div>
								</div>

								<!--Footer Column-->
								<div class="footer-column col-md-5 col-sm-6 col-xs-12">
									<div class="footer-widget link-widget">
										<div class="footer-title">
											<h2>Contact Details</h2>
											<div class="separator"></div>
										</div>
										<div class="widget-content">
											<ul>
												<li><span>Email:</span> info@alphatoproperties.com</li>
												<li><span>Phone:</span> +234 803 225 5294</li>
												<li><span>Address:</span> - Abuja| Alphato Complex Wuse II</li>
											</ul>
										</div>
									</div>
								</div>

								<!--Footer Column-->
								<div class="footer-column col-md-3 col-sm-6 col-xs-12">
									<div class="footer-widget logo-widget">
										<div class="footer-title">
											<h2>Follow Us</h2>
											<div class="separator"></div>
										</div>
										<div class="widget-content">
											<ul class="social-icon-two">
												<li><a href="#"><span class="fab fa-instagram"></span></a></li>
												<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
												<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
												<li><a href="#"><span class="fab fa-pinterest"></span></a></li>
												<li><a href="#"><span class="fab fa-twitter"></span></a></li>
												<li><a href="#"><span class="fab fa-youtube"></span></a></li>
											</ul>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Footer Bottom-->
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="row clearfix">
						<div class="column col-md-6 col-sm-6 col-xs-12">
							<div class="copyright">Copyright &copy; 2021 Alphato. All Rights Reserved. </div>
						</div>
						{{-- <div class="column col-md-6 col-sm-6 col-xs-12">
							<ul class="foter-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Conditions & Terms</a></li>
								<li><a href="faqs.html">FAQ’s</a></li>
							</ul>
						</div> --}}
					</div>
				</div>
			</div>

		</footer>
	</div>
	<!--End pagewrapper-->

	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

	<script src="{{asset('tem_files/js/jquery.js')}}"></script>
	<!--Revolution Slider-->
	<script src="{{ asset('tem_files/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="{{ asset('tem_files/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script src="{{ asset('tem_files/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script src="{{ asset('tem_files/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script src="{{ asset('tem_files/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{ asset('tem_files/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script src="{{ asset('tem_files/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script src="{{ asset('tem_files/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script src="{{ asset('tem_files/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{ asset('tem_files/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
	<script src="{{ asset('tem_files/js/main-slider-script.js')}}"></script>

	<script src="{{asset('tem_files/js/modernizr.min.js')}}"></script>
	<script src="{{asset('tem_files/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('tem_files/js/jquery.fancybox.pack.js')}}"></script>
	<script src="{{ asset('tem_files/js/jquery.fancybox-media.js')}}"></script>
	<script src="{{ asset('tem_files/js/owl.js')}}"></script>
	<script src="{{asset('tem_files/js/mixitup.js')}}"></script>
	<script src="{{asset('tem_files/js/appear.js')}}"></script>
	<script src="{{asset('tem_files/js/script.js')}}"></script>
    <script src="{{asset('tem_files/js/slider.js')}}"></script>
</body>
</html>
