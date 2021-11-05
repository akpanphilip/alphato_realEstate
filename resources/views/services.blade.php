@extends('layouts.app')
@section('content')
<title>Services | Alphato</title>
<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/3.jpg)">
        <div class="auto-container">
            <h1>Services</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Our services</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!--Services Section-->
    <section class="services-section-two style-two">
        <div class="auto-container">
            <!--Services Title-->
            <div class="services-title">
                <h4>Alphato Construction & Property Development offers top notch services including</h4>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

                <!--Services Block-->
                <div class="services-block-two style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{asset('tem_files/images/services/icon-1.svg')}}" alt="">
                        </div>
                        <h3><a href="services-single.html">Construction Management</a></h3>
                        <div class="text">This includes project schedule, cost, safety, quality and function of a
                            construction.</div>
                        {{-- <a class="read-more" href="services-single.html">read more <span
                                class="icon fa fa-angle-right"></span></a> --}}
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-two style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{asset('tem_files/images/services/icon-2.svg')}}" alt="">
                        </div>
                        <h3><a href="services-single.html">Property Selection</a></h3>
                        <div class="text">We take the stress off our clients and help them select properties among
                            properties submitted to the company by real estate brokers and independent property owners.
                        </div>
                        {{-- <a class="read-more" href="services-single.html">read more <span
                                class="icon fa fa-angle-right"></span></a> --}}
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-two style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{asset('tem_files/images/services/icon-3.svg')}}" alt="">
                        </div>
                        <h3><a href="services-single.html">Procurement</a></h3>
                        <div class="text">This is one of our most sensitive services where we must ensure that the
                            correct goods and services are purchased, and a high level of quality is received. The procure
                            and the supplier are good.</div>
                        {{-- <a class="read-more" href="services-single.html">read more <span
                                class="icon fa fa-angle-right"></span></a> --}}
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-two style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{ asset('tem_files/images/services/icon-4.svg')}}" alt="">
                        </div>
                        <h3><a href="services-single.html">Property Due Diligence</a></h3>
                        <div class="text">This is done before buying a property regardless of whom is selling to
                            you. There are several due diligence items to perform so as to avoid or minimize risk. We
                            perform due diligence carefully.</div>
                        {{-- <a class="read-more" href="services-single.html">read more <span
                                class="icon fa fa-angle-right"></span></a> --}}
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-two style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{ asset('tem_files/images/services/icon-5.svg')}}" alt="">
                        </div>
                        <h3><a href="services-single.html">Property Sale</a></h3>
                        <div class="text">We help you identify the properties that matches your budget and also do
                            a proper transfer of ownership and help you make the right payment choices.</div>
                        {{-- <a class="read-more" href="services-single.html">read more <span
                                class="icon fa fa-angle-right"></span></a> --}}
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-two style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{asset('tem_files/images/services/icon-6.svg')}}" alt="">
                        </div>
                        <h3><a href="services-single.html">Lease Negotiation</a></h3>
                        <div class="text">We offer experience and expertise when it comes to lease negotiation. To
                            settle commercial lease terms to its fairest stage.</div>
                        {{-- <a class="read-more" href="services-single.html">read more <span
                                class="icon fa fa-angle-right"></span></a> --}}
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-two style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{ asset('tem_files/images/services/icon-6.svg')}}" alt="">
                        </div>
                        <h3><a href="services-single.html">Architecture</a></h3>
                        <div class="text">We design, prepare construction documents and construction
                            administration. We carry out Feasibility studies, architectural management.</div>
                        {{-- <a class="read-more" href="services-single.html">read more <span
                                class="icon fa fa-angle-right"></span></a> --}}
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block-two style-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="{{asset('tem_files/images/services/icon-6.svg')}}" alt="">
                        </div>
                        <h3><a href="services-single.html">Advisory</a></h3>
                        <div class="text">Property development is a complex venture requiring multi-disciplinary
                            skills, knowledge and demonstrated experience. We have the pedigree to do this, as we have people with deep knowledge, skills and
                            extensive experience in various areas of property development. </div>
                        {{-- <a class="read-more" href="services-single.html">read more <span
                                class="icon fa fa-angle-right"></span></a> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Services Section-->

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
