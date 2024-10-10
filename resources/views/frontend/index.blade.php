@extends('frontend.master')
@section('content')
    <!--=====================================-->
    <!--=             Hero Start            =-->
    <!--=====================================-->
    <section class="hero-wrap style-2">
        <div class="container-fluid box-layout">
            <div class="row has-animation">
                <div class="col-lg-6">
                    <div class="hero-box style-2 translate-left transition-delay-200">
                        <div class="entry-figure">
                            <img width="551" height="531" src="{{ asset('uploads/banner') }}/{{ $banners->image }}"
                                alt="Hero Banner">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-box style-2 translate-right transition-delay-200">
                        <div class="entry-content">
                            <div class="entry-inner">
                                <h1 class="entry-title">{{ $banners->headline }}</h1>
                                <p class="entry-text">{{ $banners->desp }}</p>
                                <div class="btn-wrap">
                                    <a href="{{ route('about') }}" class="btn-fill">Know More</a>
                                    <a href="{{ route('contact') }}" class="btn-ghost">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=              Hero End             =-->
    <!--=====================================-->

    <!--=====================================-->
    <!--=            About Start            =-->
    <!--=====================================-->
    <section class="about-wrap style-2">
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
                                <img width="720" height="720" src="{{ asset('front') }}/image/about/about-2.jpg"
                                    alt="about">
                                <div class="entry-sub-figure translate-top transition-delay-500">
                                    <img width="150" height="150" src="{{ asset('front') }}/image/about/about-3.jpg"
                                        alt="about">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="about-box style-2">
                        <p class="entry-description">There are many variations of passages of Lorem Ipsum available but the
                            majority have suffered alteration in that some form that injected the humour randomised words.
                        </p>
                        <ul class="entry-info">
                            <li class="list-item translate-bottom transition-delay-500">
                                <div class="icon-box"><i class="fas fa-check"></i></div>
                                <div class="entry-content">
                                    <h3 class="entry-title">Highest Success Rates</h3>
                                    <p class="entry-text">There are many variations of passages of Lorem Ipsum available but
                                        the majority have suffered</p>
                                </div>
                            </li>
                            <li class="list-item translate-bottom transition-delay-700">
                                <div class="icon-box"><i class="fas fa-check"></i></div>
                                <div class="entry-content">
                                    <h3 class="entry-title">Real World Impact</h3>
                                    <p class="entry-text">There are many variations of passages of Lorem Ipsum available but
                                        the majority have suffered</p>
                                </div>
                            </li>
                            <li class="list-item translate-bottom transition-delay-900">
                                <div class="icon-box"><i class="fas fa-check"></i></div>
                                <div class="entry-content">
                                    <h3 class="entry-title">Unlocking Values</h3>
                                    <p class="entry-text">There are many variations of passages of Lorem Ipsum available but
                                        the majority have suffered</p>
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
    <!--=          Progress Start           =-->
    <!--=====================================-->
    <section class="progress-wrap style-3" data-bg-image="{{ asset('front') }}/image/elements/dot-banner.jpg">
        <div class="container">
            <div class="row g-4 has-animation">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-200">
                        <div class="progress-box style-3 color-1">
                            <div class="progress-icon"><i class="fas fa-code"></i></div>
                            <div class="entry-content">
                                <div class="progress-rate counter" data-num="25000">25000</div>
                                <div class="progress-title">Shortcodes</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-400">
                        <div class="progress-box style-3 color-2">
                            <div class="progress-icon"><i class="fas fa-hourglass-half"></i></div>
                            <div class="entry-content">
                                <div class="progress-rate counter" data-num="1750">1750</div>
                                <div class="progress-title">Creative Process</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-600">
                        <div class="progress-box style-3 color-3">
                            <div class="progress-icon"><i class="fas fa-project-diagram"></i></div>
                            <div class="entry-content">
                                <div class="progress-rate counter" data-num="3200">3200</div>
                                <div class="progress-title">Projects Done</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-800">
                        <div class="progress-box style-3 color-4">
                            <div class="progress-icon"><i class="fas fa-users"></i></div>
                            <div class="entry-content">
                                <div class="progress-rate counter" data-num="500">500</div>
                                <div class="progress-title">Expert Consultant</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=           Progress End            =-->
    <!--=====================================-->
    <!--=====================================-->
    <!--=          Service Start            =-->
    <!--=====================================-->
    <section class="service-wrap style-2">
        <div class="container">
            <div class="section-heading style-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-content">
                            <div class="section-sub-title">OUR SERVICES</div>
                            <h2 class="section-title">What We Offer</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 has-animation">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-200">
                        <div class="service-box style-1 color-1">
                            <div class="entry-icon"><i class="fas fa-bolt"></i></div>
                            <h3 class="entry-title title-dark"><a href="#">Optimization</a></h3>
                            <p class="entry-text">There are of many variations have majority suffered.</p>
                            <a href="{{ route('service.details') }}" class="item-btn btn-text">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-600">
                        <div class="service-box style-1 color-2">
                            <div class="entry-icon"><i class="fas fa-bezier-curve"></i></div>
                            <h3 class="entry-title title-dark"><a href="#">Branding Design</a></h3>
                            <p class="entry-text">There are of many variations have majority suffered.</p>
                            <a href="#" class="item-btn btn-text">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-1000">
                        <div class="service-box style-1 color-3">
                            <div class="entry-icon"><i class="fas fa-code"></i></div>
                            <h3 class="entry-title title-dark"><a href="#">Web Development</a></h3>
                            <p class="entry-text">There are of many variations have majority suffered.</p>
                            <a href="#" class="item-btn btn-text">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-1400">
                        <div class="service-box style-1 color-4">
                            <div class="entry-icon"><i class="fas fa-headset"></i></div>
                            <h3 class="entry-title title-dark"><a href="#">24/7 Support </a></h3>
                            <p class="entry-text">There are of many variations have majority suffered.</p>
                            <a href="#" class="item-btn btn-text">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a class="btn-ghost" href="#">SEE MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=           Service End             =-->
    <!--=====================================-->
    <!--=====================================-->
    <!--=         Testimonial Start         =-->
    <!--=====================================-->
    <section class="testimonial-wrap style-1">
        <div class="container">
            <div class="section-heading style-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-content">
                            <div class="section-sub-title">TESTIMONIAL</div>
                            <h2 class="section-title">Customer Say!</h2>
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
                                    <p class="entry-text">There are many variations of passages of Lorem Ipsum the
                                        available but the majority have suffered alteration in that as some form by injected
                                        humour or randomised words which don't look even slightly believable.</p>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <div class="entry-border"></div>
                                        <div class="client-info">
                                            <div class="entry-figure"><img width="60" height="60"
                                                    src="{{ asset('front') }}/image/testimonial/testimonial-1.jpg"
                                                    alt=""></div>
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
                                    <p class="entry-text">There are many variations of passages of Lorem Ipsum the
                                        available but the majority have suffered alteration in that as some form by injected
                                        humour or randomised words which don't look even slightly believable.</p>
                                    <div class="d-flex align-items-center justify-content-end">
                                        <div class="entry-border"></div>
                                        <div class="client-info">
                                            <div class="entry-figure"><img width="60" height="60"
                                                    src="{{ asset('front') }}/image/testimonial/testimonial-2.jpg"
                                                    alt=""></div>
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
    <!--=====================================-->
    <!--=           Project Start           =-->
    <!--=====================================-->
    <section class="project-wrap style-1 section-dark">
        <div class="container">
            <div class="section-heading style-1">
                <div class="row has-animation active-animation">
                    <div class="col-lg-12">
                        <div class="heading-content text-center">
                            <div class="section-sub-title">FIND OUT MORE</div>
                            <h2 class="section-title">Profitable Products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-btn-holder container-fluid has-animation active-animation">
            <div
                class="sliderProjectOne swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper d-flex align-items-center" id="swiper-wrapper-d94c19a7323c5209"
                    aria-live="polite" style="transform: translate3d(-2120px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                        data-swiper-slide-index="0" role="group" aria-label="1 / 15"
                        style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-200">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="390"
                                            src="{{ asset('front') }}/image/project/project-1.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                        data-swiper-slide-index="1" role="group" aria-label="2 / 15"
                        style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-400">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="330"
                                            src="{{ asset('front') }}/image/project/project-2.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                        aria-label="3 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-600">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="390"
                                            src="{{ asset('front') }}/image/project/project-3.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
                        aria-label="4 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-800">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="330"
                                            src="{{ asset('front') }}/image/project/project-4.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="4"
                        role="group" aria-label="5 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-1000">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="390"
                                            src="{{ asset('front') }}/image/project/project-5.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="0"
                        role="group" aria-label="6 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-200">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="390"
                                            src="{{ asset('front') }}/image/project/project-1.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-visible swiper-slide-next" data-swiper-slide-index="1"
                        role="group" aria-label="7 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-400">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="330"
                                            src="{{ asset('front') }}/image/project/project-2.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-visible" data-swiper-slide-index="2" role="group"
                        aria-label="8 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-600">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="390"
                                            src="{{ asset('front') }}/image/project/project-3.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-visible" data-swiper-slide-index="3" role="group"
                        aria-label="9 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-800">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="330"
                                            src="{{ asset('front') }}/image/project/project-4.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-visible swiper-slide-duplicate-prev" data-swiper-slide-index="4"
                        role="group" aria-label="10 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-1000">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="390"
                                            src="{{ asset('front') }}/image/project/project-5.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                        data-swiper-slide-index="0" role="group" aria-label="11 / 15"
                        style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-200">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="390"
                                            src="{{ asset('front') }}/image/project/project-1.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                        data-swiper-slide-index="1" role="group" aria-label="12 / 15"
                        style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-400">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="330"
                                            src="{{ asset('front') }}/image/project/project-2.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                        aria-label="13 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-600">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="390"
                                            src="{{ asset('front') }}/image/project/project-3.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
                        aria-label="14 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-800">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="330"
                                            src="{{ asset('front') }}/image/project/project-4.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
                        aria-label="15 / 15" style="width: 394px; margin-right: 30px;">
                        <div class="translate-bottom transition-delay-1000">
                            <div class="project-box style-1">
                                <div class="entry-figure">
                                    <a href="#"><img width="336" height="390"
                                            src="{{ asset('front') }}/image/project/project-5.jpg" alt="blog"></a>
                                    <div class="entry-content">
                                        <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate
                                                Agency</a></h3>
                                        <div class="entry-sub-title">Binding Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
            <span class="slider-btn style-1 slider-btn-prev" tabindex="0" role="button" aria-label="Previous slide"
                aria-controls="swiper-wrapper-d94c19a7323c5209">
                <i class="fas fa-chevron-left"></i>
            </span>
            <span class="slider-btn style-1 slider-btn-next" tabindex="0" role="button" aria-label="Next slide"
                aria-controls="swiper-wrapper-d94c19a7323c5209">
                <i class="fas fa-chevron-right"></i>
            </span>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Project End            =-->
    <!--=====================================-->
    <!--=====================================-->
    <!--=           Process Start           =-->
    <!--=====================================-->
    <section class="process-wrap style-2 has-animation"
        data-bg-image="{{ asset('front') }}/image/elements/dot-banner.jpg">
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
                        <path class="dashed1" stroke="rgba(17, 17, 17, 0.2)" stroke-dasharray="12, 12"
                            stroke-linecap="butt" stroke-linejoin="miter"
                            d="M2.219,2.809 L407.219,223.808 C407.219,223.808 616.221,326.586 778.219,205.808 C778.219,205.808 906.260,127.082 956.219,132.808 C956.219,132.808 1120.749,118.281 1291.219,245.808 L1500.219,395.809" />
                        <path class="dashed2" stroke="white" stroke-dasharray="12, 12" stroke-linecap="butt"
                            stroke-linejoin="miter"
                            d="M2.219,2.809 L407.219,223.808 C407.219,223.808 616.221,326.586 778.219,205.808 C778.219,205.808 906.260,127.082 956.219,132.808 C956.219,132.808 1120.749,118.281 1291.219,245.808 L1500.219,395.809" />
                    </g>
                </svg>
            </div>
            <div class="row child-wrap g-4">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-200">
                        <div class="process-box style-2">
                            <div class="entry-figure">
                                <img width="200" height="200"
                                    src="{{ asset('front') }}/image/process/process-1.jpg" alt="process">
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
                                <img width="200" height="200"
                                    src="{{ asset('front') }}/image/process/process-2.jpg" alt="process">
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
                                <img width="200" height="200"
                                    src="{{ asset('front') }}/image/process/process-3.jpg" alt="process">
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
                                <img width="200" height="200"
                                    src="{{ asset('front') }}/image/process/process-4.jpg" alt="process">
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
    <!--=            Process End            =-->
    <!--=====================================-->
    <!--=====================================-->
    <!--=            Team Start             =-->
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
            <div class="row g-4 has-animation active-animation">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-200">
                        <div class="team-box style-1">
                            <div class="entry-figure">
                                <img width="520" height="475" src="{{ asset('front') }}/image/team/team-1.jpg"
                                    alt="team">
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
                                <img width="520" height="475" src="{{ asset('front') }}/image/team/team-2.jpg"
                                    alt="team">
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
                                <img width="520" height="475" src="{{ asset('front') }}/image/team/team-3.jpg"
                                    alt="team">
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
                                <img width="520" height="475" src="{{ asset('front') }}/image/team/team-4.jpg"
                                    alt="team">
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
                                <img width="520" height="475" src="{{ asset('front') }}/image/team/team-5.jpg"
                                    alt="team">
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
                                <img width="520" height="475" src="{{ asset('front') }}/image/team/team-6.jpg"
                                    alt="team">
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
                                <img width="520" height="475" src="{{ asset('front') }}/image/team/team-7.jpg"
                                    alt="team">
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
                                <img width="520" height="475" src="{{ asset('front') }}/image/team/team-8.jpg"
                                    alt="team">
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
    <!--=             Team End              =-->
    <!--=====================================-->

    <!--=====================================-->
    <!--=             Pricing Start         =-->
    <!--=====================================-->
    <section class="pricing-wrap style-1">
        <div class="container">
            <div class="section-heading style-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-content">
                            <div class="section-sub-title">OUR PRICE TABLE</div>
                            <h2 class="section-title">Choose the Best Package</h2>
                            <p class="section-text">We helping client to create with our talented expert.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center has-animation active-animation">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-200">
                        <div class="pricing-box style-1">
                            <div class="entry-price">$39.00</div>
                            <div class="entry-duration">PER/MONTH</div>
                            <div class="entry-package">SILVER PACK</div>
                            <ul class="entry-info">
                                <li><i class="fas fa-check"></i>Responsive Design</li>
                                <li><i class="fas fa-check"></i>Unlimited Elements</li>
                                <li class="item-deactivate"><i class="fas fa-check"></i>Premium Theme</li>
                                <li class="item-deactivate"><i class="fas fa-check"></i>24/7 support </li>
                            </ul>
                            <a class="pricing-btn" href="#">BUY PLAN</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-400">
                        <div class="pricing-box style-1">
                            <div class="entry-price">$49.00</div>
                            <div class="entry-duration">PER/MONTH</div>
                            <div class="entry-package">GOLD PACK</div>
                            <ul class="entry-info">
                                <li><i class="fas fa-check"></i>Responsive Design</li>
                                <li><i class="fas fa-check"></i>Unlimited Elements</li>
                                <li><i class="fas fa-check"></i>Premium Theme</li>
                                <li class="item-deactivate"><i class="fas fa-check"></i>24/7 support </li>
                            </ul>
                            <a class="pricing-btn" href="#">BUY PLAN</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="translate-bottom transition-delay-600">
                        <div class="pricing-box style-1">
                            <div class="entry-price">$89.00</div>
                            <div class="entry-duration">PER/MONTH</div>
                            <div class="entry-package">PLATINUM PACK</div>
                            <ul class="entry-info">
                                <li><i class="fas fa-check"></i>Responsive Design</li>
                                <li><i class="fas fa-check"></i>Unlimited Elements</li>
                                <li><i class="fas fa-check"></i>Premium Theme</li>
                                <li><i class="fas fa-check"></i>24/7 support </li>
                            </ul>
                            <a class="pricing-btn" href="#">BUY PLAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Call To Action- Start       =-->
    <!--=====================================-->
    <section class="call-to-action-wrap style-1" style="background: #f5f5f5">
        <div class="container">
            <div class="row gap-lg-5 has-animation active-animation">
                <div class="col-lg-5">
                    <div class="translate-left transition-delay-200">
                        <div class="call-to-action-box style-1">
                            <div class="entry-form">
                                <form method="POST" id="contact-form" novalidate="true">
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <input type="text" class="form-control" placeholder="Full Name"
                                                name="name" data-error="Name field is required" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <input type="email" class="form-control" placeholder="E-mail"
                                                name="email" data-error="Email field is required" required="">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <textarea name="message" id="form-message" class="form-control textarea" placeholder="Your Message" cols="30"
                                                rows="4" data-error="Message field is required" required=""></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" class="btn-fill btn-square w-100 disabled">SEND
                                                MESSAGE</button>
                                        </div>
                                    </div>
                                    <div class="form-response"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <div class="translate-right transition-delay-200">
                        <div class="call-to-action-box style-1">
                            <h2 class="entry-title">Let’s Talk About<span> Your Project</span></h2>
                            <p class="entry-text">There are many variations of passages of Lorem Ipsum available but the
                                majority have suffered alteration in that some form by injected humour or randomised words
                                which don't look even slightly believable.
                            </p>
                            <div class="entry-contact"><a href="#"><i
                                        class="fas fa-phone-alt"></i>+227-300-3676</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=         Call To Action- End       =-->
    <!--=====================================-->
    <!--=====================================-->
    <!--=           Brand Start             =-->
    <!--=====================================-->
    <section class="brand-wrap style-1">
        <div class="container">
            <div class="sliderBrandOne swiper-container has-animation">
                <div class="swiper-wrapper d-flex align-items-center">
                    <div class="swiper-slide">
                        <div class="translate-bottom transition-delay-100">
                            <div class="brand-box style-1">
                                <div class="entry-figure">
                                    <img width="108" height="108"
                                        src="{{ asset('front') }}/image/brand/brand-1.png" alt="brand">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="translate-bottom transition-delay-300">
                            <div class="brand-box style-1">
                                <div class="entry-figure">
                                    <img width="103" height="94"
                                        src="{{ asset('front') }}/image/brand/brand-2.png" alt="brand">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="translate-bottom transition-delay-500">
                            <div class="brand-box style-1">
                                <div class="entry-figure">
                                    <img width="202" height="76"
                                        src="{{ asset('front') }}/image/brand/brand-3.png" alt="brand">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="translate-bottom transition-delay-700">
                            <div class="brand-box style-1">
                                <div class="entry-figure">
                                    <img width="109" height="102"
                                        src="{{ asset('front') }}/image/brand/brand-4.png" alt="brand">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="translate-bottom transition-delay-900">
                            <div class="brand-box style-1">
                                <div class="entry-figure">
                                    <img width="93" height="99"
                                        src="{{ asset('front') }}/image/brand/brand-5.png" alt="brand">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=            Brand End              =-->
    <!--=====================================-->
@endsection
