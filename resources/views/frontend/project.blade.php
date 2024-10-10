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
                    <span class="list-item"><span class="current-item">PROJECTS</span></span>
                </div>
            </div>
            <h1 class="page-header-title">PROJECTS SLIDER</h1>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=            Banner End             =-->
<!--=====================================-->
<!--=====================================-->
<!--=          Project Start            =-->
<!--=====================================-->
<section class="project-wrap style-4">
    <div class="slider-btn-holder">
        <div class="sliderProjectThree swiper-container has-animation">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="translate-bottom transition-delay-200">
                        <div class="project-box style-2">
                            <div class="entry-figure">
                                <a href="#"><img width="1042" height="700" src="{{ asset('front') }}/image/project/project-19.jpg" alt="blog"></a>
                                <div class="entry-content">
                                    <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate Agency</a></h3>
                                    <div class="entry-sub-title">Binding Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="translate-bottom transition-delay-200">
                        <div class="project-box style-2">
                            <div class="entry-figure">
                                <a href="#"><img width="1042" height="700" src="{{ asset('front') }}/image/project/project-19.jpg" alt="blog"></a>
                                <div class="entry-content">
                                    <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate Agency</a></h3>
                                    <div class="entry-sub-title">Binding Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="translate-bottom transition-delay-200">
                        <div class="project-box style-2">
                            <div class="entry-figure">
                                <a href="#"><img width="1042" height="700" src="{{ asset('front') }}/image/project/project-28.jpg" alt="blog"></a>
                                <div class="entry-content">
                                    <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate Agency</a></h3>
                                    <div class="entry-sub-title">Binding Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="translate-bottom transition-delay-200">
                        <div class="project-box style-2">
                            <div class="entry-figure">
                                <a href="#"><img width="1042" height="700" src="{{ asset('front') }}/image/project/project-19.jpg" alt="blog"></a>
                                <div class="entry-content">
                                    <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate Agency</a></h3>
                                    <div class="entry-sub-title">Binding Items</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="translate-bottom transition-delay-200">
                        <div class="project-box style-2">
                            <div class="entry-figure">
                                <a href="#"><img width="1042" height="700" src="{{ asset('front') }}/image/project/project-27.jpg" alt="blog"></a>
                                <div class="entry-content">
                                    <h3 class="entry-title title-dark size-md mb-0"><a href="#">Corporate Agency</a></h3>
                                    <div class="entry-sub-title">Binding Items</div>
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
</section>
<!--=====================================-->
<!--=           Project End             =-->
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
