@extends('layouts.app')
@section('content')
<title>Testimonials | Alphato</title>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
        <div class="auto-container">
            <h1>Testimonials</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">Testimonials</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Testimonial Section-->
    <section class="testimonial-section">
        <div class="auto-container">

            <!--Sec Title-->
            <div class="sec-title centered">
                <h3>What our customers think about our services</h3>
                <div class="separator"></div>
            </div>
            <!--End Sec Title-->

            <div class="single-item-carousel owl-carousel owl-theme">

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('tem_files/images/resource/author-1.jpg') }}" alt="" />
                        </div>
                        <div class="text">For over 3 years, they have managed my property and investment portfolio
                            in Abuja with transparency and integrity in all their dealings. This for me is an edge over
                            other real estate firms as I can comfortably boast of my investment been safe and in good hands.
                        </div>
                        <div class="quote-icon"><span class="icon fas fa-quote-left"></span></div>
                        <div class="author">Mr. and Mrs. Lucky Isadalor</div>
                        {{-- <div class="designation">Denver, USA</div> --}}
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('tem_files/images/resource/author-2.jpg') }}" alt="" />
                        </div>
                        <div class="text">Alphato Construction and Property Development build their structure
                            making use of the best of quality materials and their turn-around time is faster compared to
                            what the competition has to offer. The architectural design and concept are amazing and the
                            facility is affordable with top notch quality</div>
                        <div class="quote-icon"><span class="icon fas fa-quote-left"></span></div>
                        <div class="author">Reverend Timothy Dayo</div>
                        {{-- <div class="designation">Seattle, USA</div> --}}
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('tem_files/images/resource/author-1.jpg') }}" alt="" />
                        </div>
                        <div class="text">When I wanted relocating to Abuja, I had serious difficulty getting a
                            facility that meets my budget until I met Alphato Construction and Property Development Agent.
                            They helped me identify the properties that matches my budget and transferred the ownership to
                            me in real time.</div>
                        <div class="quote-icon"><span class="icon fas fa-quote-left"></span></div>
                        <div class="author">Mr. Bankole Fela</div>
                        {{-- <div class="designation">Denver, USA</div> --}}
                    </div>
                </div>

                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('tem_files/images/resource/author-2.jpg') }}" alt="" />
                        </div>
                        <div class="text">Since we began doing business with them, Alphato Construction and
                            Property Development is often our first choice of marketers especially for off-plan projects.
                            They really do know their way around real estate marketing.</div>
                        <div class="quote-icon"><span class="icon fas fa-quote-left"></span></div>
                        <div class="author">Benson Homes</div>
                        {{-- <div class="designation">Seattle, USA</div> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Testimonial Section-->

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
                    <a href="contact.html" class="theme-btn btn-style-six">Get in touch</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action-->

@endsection
