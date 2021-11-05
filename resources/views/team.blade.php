@extends('layouts.app')
@section('content')
<title>Team | Alphato</title>
<!--Page Title-->
		<section class="page-title" style="background-image:url(images/background/3.jpg)">
			<div class="auto-container">
				<h1>Our Team</h1>
				<ul class="bread-crumb clearfix">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">Our Team</li>
				</ul>
			</div>
		</section>
		<!--End Page Title-->

		<!--Team Section-->
		<section class="team-section">
			<div class="auto-container">

				<!--Sec Title-->
				<div class="sec-title centered">
                    <h4>Our team comprises of highly skilled and well-motivated individuals with extensive experience and knowledge about the workings of the real estate market.</h3>
                    <h4>Aligning Alphato Construction & Property Development values, the Senior Management team are responsible for driving company performance.</h3>
                    <div class="separator"></div>
				</div>
				<!--End Sec Title-->

                    <div class="row clearfix">

                        <!--Team Member-->
                        <div class="team-member col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('tem_files/images/resource/team-1.jpg')}}" alt="">
                                </div>
                                <div class="lower-box">
                                    <h3><a href="#">Andrew Chadwick</a></h3>
                                    <div class="designation">MD/CHAIRMAN </div>
                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Team Member-->
                        <div class="team-member col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('tem_files/images/resource/team-2.jpg')}}" alt="" />
                                </div>
                                <div class="lower-box">
                                    <h3><a href="#">Trisha Dalton</a></h3>
                                    <div class="designation">HEAD OF ADMIN AND HR</div>
                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Team Member-->
                        <div class="team-member col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('tem_files/images/resource/team-3.jpg')}}" alt="" />
                                </div>
                                <div class="lower-box">
                                    <h3><a href="#">Brandon Edwards</a></h3>
                                    <div class="designation">CHIEF ARHITECT</div>
                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Team Member-->
                        <div class="team-member col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('tem_files/images/resource/team-4.jpg')}}" alt="" />
                                </div>
                                <div class="lower-box">
                                    <h3><a href="#">Miranda Houston</a></h3>
                                    <div class="designation">PROJECT MANAGER</div>
                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Team Member-->
                        <div class="team-member col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('tem_files/images/resource/team-4.jpg')}}" alt="" />
                                </div>
                                <div class="lower-box">
                                    <h3><a href="#">Jane Peters</a></h3>
                                    <div class="designation">SITE ENGINEER</div>
                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
			</div>
		</section>
		<!--End Team Section-->

		    <!--Call To Action-->
            <section class="call-to-action">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="column col-md-8 col-sm-12 col-xs-12">
                            <h4 class="text-light">We can help in Development Conception, Design & Build, Development/Investment
                                Appraisal, Rehabilitation, Structuring Real Estate Ventures & Deals, and Policies & Processes’
                                Designs.</h4>
                        </div>
                        <div class="btn-column col-md-4 col-sm-12 col-xs-12">
                        <a href="mailto:info@alphatoproperties.com" class="theme-btn btn-style-six">Get in touch</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Call To Action-->

@endsection
