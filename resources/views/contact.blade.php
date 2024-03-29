@extends('layouts.app')
@section('content')
		<!--Page Title-->
		<section class="page-title" style="background-image:url(images/background/3.jpg)">
			<div class="auto-container">
				<h1>Contact Us</h1>
				<ul class="bread-crumb clearfix">
					<li><a href="index.html">Home</a></li>
					<li class="active">Contact Us</li>
				</ul>
			</div>
		</section>
		<!--End Page Title-->

		<!--Contact Section-->
		<section class="contact-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!--Form Column-->
					<div class="form-column col-md-7 col-sm-12 col-xs-12">
						<div class="column-inner">
							<div class="form-title">
								<h2>Contact Form</h2>
								<div class="separator"></div>
								<div class="text">We would like to contribute in the project you're thinking of. Please, leave us a message to be in touch.</div>
							</div>

							<!-- Contact Form -->
							<div class="contact-form">
								<form id="contact-form" action="php/contact.php" method="post" data-redirect="contact-success.html">
									<div class="row clearfix">
										<div class="col-md-6 col-sm-6 col-xs-12 form-group">
											<input type="text" name="username" placeholder="Your Name" required>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12 form-group">
											<input type="email" name="email" placeholder="Email address" required>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12 form-group">
											<input type="text" name="phone" placeholder="Phone" required>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12 form-group">
											<input type="text" name="subject" placeholder="Subject" required>
										</div>

										<div class=" col-md-12 col-sm-12 col-xs-12 form-group">
											<textarea name="message" placeholder="Message"></textarea>
										</div>

										<div class="col-md-12 col-sm-12 col-xs-12 form-group">
											<button class="theme-btn btn-style-one" type="submit" name="submit-form">Send message</button>
										</div>
									</div>
								</form>
							</div>
							<!--End Contact Form -->
						</div>
					</div>

					<!--Info Column-->
					<div class="info-column col-md-5 col-sm-12 col-xs-12">
						<ul class="list-style-two">
							<li>
								<span class="icon flaticon-symbol"></span>
								<div class="info-featured">hello@aizendesign.com</div>
							</li>
							<li>
								<span class="icon flaticon-smartphone"></span>
								<div class="info-featured">+1 212-558-2995</div>
							</li>
							<li>
								<span class="icon flaticon-placeholder"></span>
								<div class="text-info">Address</div>
								<h3>525 7th Avenue - Suite 1601<br>New York, NY 10001</h3>
							</li>

							<li>
								<span class="icon flaticon-clock-1"></span>
								<div class="text-info">Working Hours</div>
								<h3>Monday - Friday<br>09:00 to 18:00</h3>
							</li>
						</ul>

					</div>

				</div>
			</div>
		</section>
		<!--End Contact Section-->

		<!--Map Section-->
		<section class="map-section">
			<div class="auto-container">
				<div class="row clearfix">
					<div class="map-title col-md-12">
						<h2>Our Location</h2>
						<div class="separator"></div>
					</div>
				</div>
			</div>
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
				<div class="map-canvas"
					data-zoom="14"
					data-lat="40.753638"
					data-lng="-73.988446"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="Aizen Architecture"
					data-icon-path="images/icons/map-marker.png"
					data-content="525 7th Avenue, New York City, USA<br><a href='mailto:hello@aizendesign.com'>hello@aizendesign.com</a>">
				</div>
			</div>
		</section>
		<!--End Map Section-->
@endsection
