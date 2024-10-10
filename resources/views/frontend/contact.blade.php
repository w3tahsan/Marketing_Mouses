@extends('frontend.master')
@section('content')
 <!--=====================================-->
<!--=           Banner Start            =-->
<!--=====================================-->
<section class="page-header" data-bg-image="{{ asset('front') }}/image/banner/inner-page-banner.jpg">
    <div class="container">
        <div class="page-header-wrapper">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumbs">
                    <span class="list-item"><a href="index.html">HOME</a></span>
                    <span class="list-item"><span class="separator"> / </span></span>
                    <span class="list-item"><span class="current-item">CONTACT US</span></span>
                </div>
            </div>
            <h1 class="page-header-title">CONTACT US</h1>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=            Banner End             =-->
<!--=====================================-->
<!--=====================================-->
<!--=           Contact Start           =-->
<!--=====================================-->
<section class="contact-wrap style-1">
    <div class="container">
        <div class="row g-4 has-animation">
            <div class="col-xl-4 col-12">
                <div class="translate-bottom transition-delay-200">
                    <div class="address-box">
                        <div class="entry-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title">Phone</h3>
                            <ul class="entry-info">
                                <li>Call : +8801682648101</li>
                                <li>Fax : 02 9292101</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="translate-bottom transition-delay-400">
                    <div class="address-box">
                        <div class="entry-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title">Email</h3>
                            <ul class="entry-info">
                                <li>needhelp@alori.com</li>
                                <li>support@alori.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-12">
                <div class="translate-bottom transition-delay-600">
                    <div class="address-box">
                        <div class="entry-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title">Address</h3>
                            <ul class="entry-info">
                                <li>Nice House, 2/21 City</li>
                                <li>Road Hoxton, N1 6NG, CA</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="entry-map has-animation">
            <div class="translate-bottom transition-delay-800">
                <div class="map-box" data-lat="40.741895" data-lng="-73.989308" data-mrkr="{{ asset('front') }}/image/map-marker.png"></div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=             Contact End           =-->
<!--=====================================-->
<!--=====================================-->
<!--=           Contact Start           =-->
<!--=====================================-->
<section class="contact-wrap style-2" id="contact">
    <div class="d-lg-flex has-animation">
        <div class="contact-box">
            <div class="entry-figure translate-left transition-delay-200">
                <img width="960" height="600" src="{{ asset('front') }}/image/banner/contact-banner.jpg" alt="Contact">
            </div>
        </div>
        <div class="contact-box d-flex align-items-center">
            <div class="entry-form translate-right transition-delay-200">
                <form id="contact-form">
                    <div class="row">
                        <div class="col-xl-6 form-group">
                            <input type="text" placeholder="Name *" class="form-control" name="name" data-error="Name field is required" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-xl-6 form-group">
                            <input type="text" placeholder="Phone *" class="form-control" name="phone" data-error="Phone field is required" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-xl-12 form-group">
                            <input type="email" placeholder="Email *" class="form-control" name="email" data-error="Email field is required" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-12 form-group">
                            <textarea placeholder="Message *" class="textarea form-control" name="message" id="form-message" rows="6" cols="20" data-error="Message field is required" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-12 form-group mb-0">
                            <button type="submit" class="btn-fill btn-square">SEND MESSAGE</button>
                        </div>
                    </div>
                    <div class="form-response"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=             Contact End           =-->
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
                                <img width="108" height="108" src="{{ asset('front') }}/image/brand/brand-1.png" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="translate-bottom transition-delay-300">
                        <div class="brand-box style-1">
                            <div class="entry-figure">
                                <img width="103" height="94" src="{{ asset('front') }}/image/brand/brand-2.png" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="translate-bottom transition-delay-500">
                        <div class="brand-box style-1">
                            <div class="entry-figure">
                                <img width="202" height="76" src="{{ asset('front') }}/image/brand/brand-3.png" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="translate-bottom transition-delay-700">
                        <div class="brand-box style-1">
                            <div class="entry-figure">
                                <img width="109" height="102" src="{{ asset('front') }}/image/brand/brand-4.png" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="translate-bottom transition-delay-900">
                        <div class="brand-box style-1">
                            <div class="entry-figure">
                                <img width="93" height="99" src="{{ asset('front') }}/image/brand/brand-5.png" alt="brand">
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
