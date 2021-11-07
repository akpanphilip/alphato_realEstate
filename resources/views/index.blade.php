@extends('layouts.app')
@section('content')
<title>Alphato</title>
<div class="slider">
    <!-- fade css -->
    <div class="myslide fade">
        <div class="txt">
            <h1>We Design Spaces that uplift the people that experience them</h1>
            <p>Interiors are the essentials life, defining our existence</p>
        </div>
        <img src="/tem_files/images/main-slider/real-estate1.jpg" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
        <div class="txt">
            <h1>We Create Structures that inspire</h1>
            <p>Together we ensure that each building fulfill their needs as unique manifestation of brand, mission and values</p>
        </div>
        <img src="/tem_files/images/main-slider/real-estate2.jpg" style="width: 100%; height: 100%;">
    </div>
    <!-- /fade css -->

    <!-- onclick js -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="dotsbox" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
    <!-- /onclick js -->
</div>
<!--End Main Slider-->
    <!--About Section-->
    <section class="about-section-home">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="about-details col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title style-two">
                            <div class="sub-title">From undulating skyscrapers to marvelous museums</div>
                            <h2>About <span>ALPHATO</span></h2>
                            <div class="separator"></div>
                        </div>
                        <div class="text">
                            <p>Alphato Construction & Property Development draws their over 20 years’ experience in
                                integrated property development and management in creating a niche and household name as a
                                trailblazer in the property development industry.</p>
                            <p>In an ever changing, fast-paced world, success is determined by hardwork and right choices
                                for lasting effects. Alphato Construction & Property Development is the best choice for
                                clients by meeting ernestly their property and developmental needs.</p>

                        </div>
                    </div>
                </div>
                <div class="about-details-image col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="{{asset('tem_files/images/main-slider/real-estate3.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Project Section-->
    <section class="project-section-home">
        <div class="auto-container">
            <div class="sec-title style-two centered">
                <h2>Our <span>Projects</span></h2>
                <div class="separator"></div>
            </div>
            <div class="projects-carousel owl-carousel owl-theme">
                <div class="item">
                    <div><img src="/tem_files/images/resource/project-1.jpg" alt=""></div>
                    <div class="info">
                        <h3><a href="project-single.html">Aqua Residence</a></h3>
                        <h4><a href="project-single.html">Architecture</a></h4>
                        <a href="project-single.html"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div><img src="/tem_files/images/resource/project-2.jpg" alt=""></div>
                    <div class="info">
                        <h3><a href="project-single.html">Box Perspective</a></h3>
                        <h4><a href="project-single.html">Engineering</a></h4>
                        <a href="project-single.html"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div><img src="/tem_files/images/resource/project-3.jpg" alt=""></div>
                    <div class="info">
                        <h3><a href="project-single.html">Bricks High</a></h3>
                        <h4><a href="project-single.html">Consulting</a></h4>
                        <a href="project-single.html"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div><img src="/tem_files/images/resource/project-4.jpg" alt=""></div>
                    <div class="info">
                        <h3><a href="project-single.html">Rustic Nature</a></h3>
                        <h4><a href="project-single.html">Interior</a></h4>
                        <a href="project-single.html"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div><img src="/tem_files/images/resource/project-5.jpg" alt=""></div>
                    <div class="info">
                        <h3><a href="project-single.html">Pool Party</a></h3>
                        <h4><a href="project-single.html">Construction</a></h4>
                        <a href="project-single.html"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div><img src="/tem_files/images/resource/project-6.jpg" alt=""></div>
                    <div class="info">
                        <h3><a href="project-single.html">Bar Concept</a></h3>
                        <h4><a href="project-single.html">Interior</a></h4>
                        <a href="project-single.html"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="text-center">
            <a href="projects.html" class="theme-btn btn-style-one">more projects</a>
        </div>
    </section>
    <!--End Project Section-->

    <!--Counter Section-->
    <div class="counter-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Interesting Facts</h2>
                <div class="sub-title">A summary of our challenges translated into numbers</div>
                <div class="separator">
                    <span class="dott"></span>
                    <span class="dott"></span>
                    <span class="dott"></span>
                </div>
            </div>
        </div>
        <div class="fact-section" style="background-image:url(images/background/2.jpg)">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title Column-->
                    <div class="title-column col-md-6 col-sm-12 col-xs-12">
                        <div class="title-inner">
                            <div class="number">15</div>
                            <div class="text">years transforming places and creating plans that improve life</div>
                        </div>
                    </div>
                    <div class="counter-column col-md-6 col-sm-12 col-xs-12">

                        <div class="fact-counter">
                            <div class="auto-container">
                                <div class="row clearfix">

                                    <!--Column-->
                                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2000" data-stop="220">0</span>
                                            </div>
                                            <h4 class="counter-title">Certified Engineers</h4>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2000" data-stop="180">0</span>
                                            </div>
                                            <h4 class="counter-title">Happy Clients</h4>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2000" data-stop="600">0</span>
                                            </div>
                                            <h4 class="counter-title">Awards Won</h4>
                                        </div>
                                    </div>

                                    <!--Column-->
                                    <div class="column counter-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="2000" data-stop="260">0</span>
                                            </div>
                                            <h4 class="counter-title">Projects Done</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Counter Section-->

    <!--News Section-->
    {{-- <section class="news-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Latest News</h2>
                <div class="sub-title">Learn more about design tips and construction trends</div>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <a href="blog-single.html">
                            <div class="image">
                                <img src="{{ asset('tem_files/images/resource/news-thumb-1.jpg') }}" alt="" />
                            </div>
                        </a>
                        <div class="lower-box">
                            <div class="post-date"><i class="far fa-calendar-alt"></i> March 29, 2021</div>
                            <h3><a href="blog-single.html">Everything You Need to Know About Minimalist Design</a></h3>
                            <div class="text">Clean lines, reductive, uncluttered, monochromatic, simplicity,
                                "less is more" these are some of the terms and concepts.</div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <a href="blog-single.html" class="read-more">Read More <span
                                            class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <a href="blog-single.html">
                            <div class="image">
                                <img src="{{ asset('tem_files/images/resource/news-thumb-2.jpg') }}" alt="" />
                            </div>
                        </a>
                        <div class="lower-box">
                            <div class="post-date"><i class="far fa-calendar-alt"></i> March 22, 2021</div>
                            <h3><a href="blog-single.html">Organizing Ideas To Give Your Office The Ultimate Upgrade</a>
                            </h3>
                            <div class="text">Home offices are all the rage right now. Yours could be the
                                headquarters for a small business, questionably relevant papers, or homework central.</div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <a href="blog-single.html" class="read-more">Read More <span
                                            class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <a href="blog-single.html">
                            <div class="image">
                                <img src="{{ asset('tem_files/images/resource/news-thumb-3.jpg') }}" alt="" />
                            </div>
                        </a>
                        <div class="lower-box">
                            <div class="post-date"><i class="far fa-calendar-alt"></i> March 15, 2021</div>
                            <h3><a href="blog-single.html">How to Decorate Your Kitchen with Subway Tiles</a></h3>
                            <div class="text">It doesn't matter what your design aesthetic is or how much space
                                you have, one thing's for sure: Subway tiles are a failsafe.</div>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <a href="blog-single.html" class="read-more">Read More <span
                                            class="fa fa-angle-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--End News Section-->

    <!--Testimonial Section-->
    <section class="clients-section  grey-bg">
        <div class="auto-container">
            <div class="title-box">
                <div class="title">Our work is defined by so much more than just recognition</div>
                <h2>Trusted by hundreds of clients around the country</h2>
                <div class="separator"></div>
            </div>

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="/tem_files/images/clients/1.jpg" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="/tem_files/images/clients/2.jpg" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="/tem_files/images/clients/3.jpg" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="/tem_files/images/clients/4.jpg" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="/tem_files/images/clients/5.jpg" alt=""></a></figure>
                    </li>
                </ul>

            </div>
        </div>
    </section>
    <!--End Testimonial Section-->

@endsection
