@extends('frontend.master')
@section('content')
<!--=====================================-->
<!--=           Banner Start            =-->
<!--=====================================-->
<section class="page-header" data-bg-image="{{asset('front')}}/image/banner/inner-page-banner.jpg">
    <div class="container">
        <div class="page-header-wrapper">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumbs">
                    <span class="list-item"><a href="index.html">HOME</a></span>
                    <span class="list-item"><span class="separator"> / </span></span>
                    <span class="list-item"><span class="current-item">ABOUT US</span></span>
                </div>
            </div>
            <h1 class="page-header-title">ABOUT US</h1>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=            Banner End             =-->
<!--=====================================-->
<!--=====================================-->
<!--=             About Start           =-->
<!--=====================================-->
<section class="about-wrap style-2" style="background: #fff">
    <div class="container">
        <div class="section-heading style-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-content">
                        <div class="section-sub-title">About the Agency</div>
                        <h2 class="section-title">Insights and Resources to help Drive your Business </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center has-animation">
            <div class="col-lg-5 d-flex align-items-center">
                <div class="translate-left transition-delay-200">
                    <div class="about-box style-2">
                        <div class="entry-figure">
                            <img width="720" height="720" src="{{ asset('front') }}/image/about/about-2.jpg" alt="about">
                            <div class="entry-sub-figure translate-top transition-delay-500">
                                <img width="150" height="150" src="{{ asset('front') }}/image/about/about-3.jpg" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="about-box style-2">
                    <p class="entry-description">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in that some form that injected the humour randomised words.</p>
                    <ul class="entry-info">
                        <li class="list-item translate-bottom transition-delay-500">
                            <div class="icon-box"><i class="fas fa-check"></i></div>
                            <div class="entry-content">
                                <h3 class="entry-title">Highest Success Rates</h3>
                                <p class="entry-text">There are many variations of passages of Lorem Ipsum available but the majority have suffered</p>
                            </div>
                        </li>
                        <li class="list-item translate-bottom transition-delay-700">
                            <div class="icon-box"><i class="fas fa-check"></i></div>
                            <div class="entry-content">
                                <h3 class="entry-title">Real World Impact</h3>
                                <p class="entry-text">There are many variations of passages of Lorem Ipsum available but the majority have suffered</p>
                            </div>
                        </li>
                        <li class="list-item translate-bottom transition-delay-900">
                            <div class="icon-box"><i class="fas fa-check"></i></div>
                            <div class="entry-content">
                                <h3 class="entry-title">Unlocking Values</h3>
                                <p class="entry-text">There are many variations of passages of Lorem Ipsum available but the majority have suffered</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=              About End            =-->
<!--=====================================-->
<!--=====================================-->
<!--=             About Start           =-->
<!--=====================================-->
<section class="about-wrap style-3">
    <div class="container">
        <div class="row has-animation">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="translate-left transition-delay-200">
                    <div class="section-heading style-3">
                        <div class="heading-content">
                            <h2 class="section-title">We Help Your Digital Business Grow</h2>
                            <p class="section-text">There are many variations of passages of Lorem Ipsum available is but the majority have suffered alteration in that some form dumy injected humour slightly believable.</p>
                        </div>
                    </div>
                    <div class="about-box style-3">
                        <div class="entry-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="entry-content">
                            <div class="contact-slogan">Have any question? Give us a call</div>
                            <div class="contact-number">+227-300-3676</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="translate-right transition-delay-200">
                    <div class="about-box style-3">
                        <div class="entry-figure">
                            <img width="700" height="745" src="{{asset('front')}}/image/about/about-4.jpg" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=              About End            =-->
<!--=====================================-->
<!--=====================================-->
<!--=              Team Start           =-->
<!--=====================================-->
<section class="team-wrap style-1">
    <div class="container">
        <div class="section-heading style-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-content">
                        <div class="section-sub-title">WHAT WE DO</div>
                        <h2 class="section-title">What We Offer</h2>
                        <p class="section-text">We helping client to create with our talented expert.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 has-animation">
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-200">
                    <div class="team-box style-1">
                        <div class="entry-figure">
                            <img width="520" height="475" src="{{asset('front')}}/image/team/team-1.jpg" alt="team">
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title color-light"><a href="#">Mathryn Murphy</a></h3>
                            <div class="entry-sub-title">LEAD RESEARCH</div>
                            <ul class="entry-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-400">
                    <div class="team-box style-1">
                        <div class="entry-figure">
                            <img width="520" height="475" src="{{asset('front')}}/image/team/team-2.jpg" alt="team">
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title color-light"><a href="#">Mathryn Murphy</a></h3>
                            <div class="entry-sub-title">LEAD RESEARCH</div>
                            <ul class="entry-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-600">
                    <div class="team-box style-1">
                        <div class="entry-figure">
                            <img width="520" height="475" src="{{asset('front')}}/image/team/team-3.jpg" alt="team">
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title color-light"><a href="#">Mathryn Murphy</a></h3>
                            <div class="entry-sub-title">LEAD RESEARCH</div>
                            <ul class="entry-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-800">
                    <div class="team-box style-1">
                        <div class="entry-figure">
                            <img width="520" height="475" src="{{asset('front')}}/image/team/team-4.jpg" alt="team">
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title color-light"><a href="#">Mathryn Murphy</a></h3>
                            <div class="entry-sub-title">LEAD RESEARCH</div>
                            <ul class="entry-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="translate-bottomtransition-delay-200">
                    <div class="team-box style-1">
                        <div class="entry-figure">
                            <img width="520" height="475" src="{{asset('front')}}/image/team/team-5.jpg" alt="team">
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title color-light"><a href="#">Mathryn Murphy</a></h3>
                            <div class="entry-sub-title">Lead Research</div>
                            <ul class="entry-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-400">
                    <div class="team-box style-1">
                        <div class="entry-figure">
                            <img width="520" height="475" src="{{asset('front')}}/image/team/team-6.jpg" alt="team">
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title color-light"><a href="#">Mathryn Murphy</a></h3>
                            <div class="entry-sub-title">LEAD RESEARCH</div>
                            <ul class="entry-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-600">
                    <div class="team-box style-1">
                        <div class="entry-figure">
                            <img width="520" height="475" src="{{asset('front')}}/image/team/team-7.jpg" alt="team">
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title color-light"><a href="#">Mathryn Murphy</a></h3>
                            <div class="entry-sub-title">LEAD RESEARCH</div>
                            <ul class="entry-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-800">
                    <div class="team-box style-1">
                        <div class="entry-figure">
                            <img width="520" height="475" src="{{asset('front')}}/image/team/team-8.jpg" alt="team">
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title color-light"><a href="#">Mathryn Murphy</a></h3>
                            <div class="entry-sub-title">LEAD RESEARCH</div>
                            <ul class="entry-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=               Team End            =-->
<!--=====================================-->
<!--=====================================-->
<!--=            Process Start          =-->
<!--=====================================-->
<section class="process-wrap style-2 has-animation" data-bg-image="{{asset('front')}}/image/elements/dot-banner.jpg">
    <div class="container">
        <div class="section-heading style-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-content">
                        <div class="section-sub-title">Easy 4 Steps</div>
                        <h2 class="section-title">Working Process</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="process-shap">
            <svg width="1501" height="396">
    <g fill="none" stroke-width="3">
    <path class="dashed1" stroke="rgba(17, 17, 17, 0.2)" stroke-dasharray="12, 12" stroke-linecap="butt" stroke-linejoin="miter" d="M2.219,2.809 L407.219,223.808 C407.219,223.808 616.221,326.586 778.219,205.808 C778.219,205.808 906.260,127.082 956.219,132.808 C956.219,132.808 1120.749,118.281 1291.219,245.808 L1500.219,395.809" />
    <path class="dashed2" stroke="white" stroke-dasharray="12, 12" stroke-linecap="butt" stroke-linejoin="miter" d="M2.219,2.809 L407.219,223.808 C407.219,223.808 616.221,326.586 778.219,205.808 C778.219,205.808 906.260,127.082 956.219,132.808 C956.219,132.808 1120.749,118.281 1291.219,245.808 L1500.219,395.809" />
    </g>
</svg>
        </div>
        <div class="row child-wrap g-4">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="translate-bottom transition-delay-200">
                    <div class="process-box style-2">
                        <div class="entry-figure">
                            <img width="200" height="200" src="{{asset('front')}}/image/process/process-1.jpg" alt="process">
                            <div class="entry-icon"><i class="fas fa-filter"></i></div>
                            <div class="entry-number">01</div>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title">Uniq Concepts</h3>
                            <p class="entry-text">We love our clients from over the worldlaser your audience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="translate-bottom transition-delay-400">
                    <div class="process-box style-2">
                        <div class="entry-figure">
                            <img width="200" height="200" src="{{asset('front')}}/image/process/process-2.jpg" alt="process">
                            <div class="entry-icon"><i class="fas fa-clone"></i></div>
                            <div class="entry-number">02</div>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title">Prototype</h3>
                            <p class="entry-text">We love our clients from over the worldlaser your audience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="translate-bottom transition-delay-800">
                    <div class="process-box style-2">
                        <div class="entry-figure">
                            <img width="200" height="200" src="{{asset('front')}}/image/process/process-3.jpg" alt="process">
                            <div class="entry-icon"><i class="fas fa-code"></i></div>
                            <div class="entry-number">03</div>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title">Development</h3>
                            <p class="entry-text">We love our clients from over the worldlaser your audience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="translate-bottom transition-delay-1100">
                    <div class="process-box style-2">
                        <div class="entry-figure">
                            <img width="200" height="200" src="{{asset('front')}}/image/process/process-4.jpg" alt="process">
                            <div class="entry-icon"><i class="fas fa-globe"></i></div>
                            <div class="entry-number">04</div>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title">Website Launch</h3>
                            <p class="entry-text">We love our clients from over the worldlaser your audience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=             Process End           =-->
<!--=====================================-->
<!--=====================================-->
<!--=         Testimonial Start         =-->
<!--=====================================-->
<section class="testimonial-wrap style-2">
    <div class="container">
        <div class="section-heading style-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-content">
                        <div class="section-sub-title">TESTIMONIAL</div>
                        <h2 class="section-title">Customer Say!</h2>
                        <p class="section-text">We helping client to create with our talented expert.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-btn-holder container">
            <div class="sliderTestimonialOne swiper-container has-animation">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="translate-left transition-delay-200">
                            <div class="testimonial-box style-1">
                                <div class="icon-box"><i class="fas fa-quote-left"></i></div>
                                <p class="entry-text">There are many variations of passages of Lorem Ipsum the available but the majority have suffered alteration in that as some form by injected humour or randomised words which don't look even slightly believable.</p>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="entry-border"></div>
                                    <div class="client-info">
                                        <div class="entry-figure"><img width="60" height="60" src="{{asset('front')}}/image/testimonial/testimonial-1.jpg" alt=""></div>
                                        <div class="entry-content">
                                            <h4 class="entry-title">Jessica Brown</h4>
                                            <div class="entry-sub-title">Customer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="translate-right transition-delay-200">
                            <div class="testimonial-box style-1">
                                <div class="icon-box"><i class="fas fa-quote-left"></i></div>
                                <p class="entry-text">There are many variations of passages of Lorem Ipsum the available but the majority have suffered alteration in that as some form by injected humour or randomised words which don't look even slightly believable.</p>
                                <div class="d-flex align-items-center justify-content-end">
                                    <div class="entry-border"></div>
                                    <div class="client-info">
                                        <div class="entry-figure"><img width="60" height="60" src="{{asset('front')}}/image/testimonial/testimonial-2.jpg" alt=""></div>
                                        <div class="entry-content">
                                            <h4 class="entry-title">Jessica Brown</h4>
                                            <div class="entry-sub-title">Customer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="slider-btn style-2 slider-btn-prev">
                <i class="fas fa-chevron-left"></i>
            </span>
            <span class="slider-btn style-2 slider-btn-next">
                <i class="fas fa-chevron-right"></i>
            </span>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=          Testimonial End          =-->
<!--=====================================-->
@endsection
