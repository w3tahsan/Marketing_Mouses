<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Marketing Mouses</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front') }}/image/favicon.png">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/flaticon/flaticon.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/wow/animate.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/magnific-popup/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('front') }}/assets/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/app.css">
    <!-- Google Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400;500;600;700&amp;family=Work+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Add your site or application content here -->
    <div id="preloader" class="preloader">
        <div class="loaders loader-1">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>
    </div>
    <div class="wrapper" id="wrapper">
        <div id="main_content">
            <div class="sticky-social has-animation">
                <ul>
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
            <!--=====================================-->
            <!--=            Navbar Start           =-->
            <!--=====================================-->
            <header class="header header1 sticky-on trheader">
                <div id="sticky-placeholder"></div>
                <div id="navbar-wrap" class="navbar-wrap">
                    <div class="header-menu">
                        <div class="container-fluid">
                            <div class="box-layout border-bottom">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="site-branding">
                                        <a href="{{ route('index') }}" class="logo logo-light"><img width="120"
                                                src="{{ asset('front') }}/image/logo-dark.png" alt="Logo"></a>
                                        <a href="{{ route('index') }}" class="logo logo-dark"><img
                                                src="{{ asset('front') }}/image/logo-dark.png" alt="Logo"></a>
                                    </div>
                                    <nav id="dropdown" class="template-main-menu menu-text-dark">
                                        <ul class="menu">
                                            <li class="menu-item menu-item-has-children active"><a
                                                    href="{{ route('index') }}">Home</a></li>
                                            <li class="menu-item menu-item-has-children"><a
                                                    href="{{ route('about') }}">About Us</a></li>
                                            <li class="menu-item"><a href="{{ route('service') }}">Service</a></li>
                                            <li class="menu-item menu-item-has-children"><a
                                                    href="{{ route('project') }}">Projects</a></li>
                                            <li class="menu-item menu-item-has-children"><a
                                                    href="{{ route('team') }}">Our Team</a></li>
                                            <li class="menu-item menu-item-has-children"><a
                                                    href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                    <ul class="header-action-items">
                                        <li class="btn-wrap">
                                            <a href="{{ route('contact') }}#contact" title="Get Started"
                                                class="btn-fill">Get Started</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="fxt-header-menu mean-container" id="meanmenu">
                <div class="mean-bar">
                    <a href="index.html">
                        <img src="{{ asset('front') }}/image/logo-dark.png" alt="Logo" width="80"
                            height="29">
                    </a>
                    <span class="sidebarBtn">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>
                </div>
                <div class="fxt-slide-nav">
                    <div class="offscreen-navigation">
                        <nav class="menu-main-primary-container">
                            <ul class="menu">
                                <li class="list menu-item-parent menu-item-has-children active">
                                    <a class="animation" href="home-main.html">Home</a>
                                    <ul class="main-menu__dropdown sub-menu">
                                        <li><a href="index.html">Marketing Agency</a>
                                        </li>
                                        <li class="active"><a href="index2.html">Digital Agency</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list menu-item-parent menu-item-has-children">
                                    <a class="animation" href="home-main.html">Pages</a>
                                    <ul class="main-menu__dropdown sub-menu">
                                        <li><a href="about.html">About Us</a>
                                        </li>
                                        <li><a href="team.html">Our Team</a>
                                        </li>
                                        <li><a href="faq.html">FAQ Page</a>
                                        </li>
                                        <li><a href="error.html">404 Error Page</a></li>
                                    </ul>
                                </li>
                                <li class="list menu-item-parent">
                                    <a class="animation" href="service.html">Services</a>
                                </li>
                                <li class="list menu-item-parent menu-item-has-children">
                                    <a class="animation" href="home-main.html">Projects</a>
                                    <ul class="main-menu__dropdown sub-menu">
                                        <li><a href="project-grid.html">Projects Grid</a></li>
                                        <li><a href="project-slider.html">Projects Slider</a></li>
                                        <li><a href="single-project.html">Projects Details</a></li>
                                    </ul>
                                </li>

                                <li class="list menu-item-parent">
                                    <a class="animation" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--=====================================-->
            <!--=              Navbar End           =-->
            <!--=====================================-->
            @yield('content')
            <!--=====================================-->
            <!--=          Footer Start             =-->
            <!--=====================================-->
            <footer class="footer-wrap style-2">
                <div class="footer-top style-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="footer-widget">
                                    <div class="footer-widget-about">
                                        <div class="entry-logo">
                                            <a href="index.html"><img src="{{ asset('front') }}/image/logo-light.png"
                                                    alt="Logo"></a>
                                        </div>
                                        <div class="entry-address">86 Road Broklyn Street, 600 New York, USA</div>
                                        <div class="entry-email">Your@company.com</div>
                                        <div class="entry-phone">+948 564 485 5492</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="footer-widget">
                                    <h3 class="footer-widget-title">Company</h3>
                                    <div class="footer-widget-menu style-2">
                                        <ul>
                                            <li><a href="#">About Us Company</a></li>
                                            <li><a href="#">Marketing Guides</a></li>
                                            <li><a href="#">Our Plan & Pricing</a></li>
                                            <li><a href="#">Company Privace & Policy</a></li>
                                            <li><a href="#">FAQ Page</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="footer-widget">
                                    <h3 class="footer-widget-title">Solutions</h3>
                                    <div class="footer-widget-menu style-2">
                                        <ul>
                                            <li><a href="#">Strategic Planning</a></li>
                                            <li><a href="#">Framework Development</a></li>
                                            <li><a href="#">Application Design</a></li>
                                            <li><a href="#">Marketing</a></li>
                                            <li><a href="#">Design</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="footer-widget">
                                    <div class="footer-widget-newsletter style-2">
                                        <div>
                                            <h3 class="footer-widget-title">Get Started</h3>
                                            <form>
                                                <div class="d-flex">
                                                    <input type="email" class="form-control"
                                                        placeholder="Email address">
                                                    <button type="submit"
                                                        class="btn-fill btn-square">SUBSCRIBE</button>
                                                </div>
                                                <div class="checkbox">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1">I agree to the Privacy Policy</label>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom style-2">
                    <div class="container d-flex flex-wrap align-items-center justify-content-between gap-1">
                        <div class="entry-text">Qowl©2022. All Rights Reserved.</div>
                        <div class="entry-text">Privacy Terms & Conditions</div>
                    </div>
                </div>
            </footer>
            <!--=====================================-->
            <!--=           Footer End              =-->
            <!--=====================================-->
        </div>
    </div>
    <script src="{{ asset('front') }}/assets/jquery/jquery.min.js"></script>
    <script src="{{ asset('front') }}/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('front') }}/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('front') }}/assets/magnific-popup/js/magnific-popup.min.js"></script>
    <script src="{{ asset('front') }}/assets/wow/wow.min.js"></script>
    <script src="{{ asset('front') }}/assets/swiper/js/swiper.min.js"></script>
    <script src="{{ asset('front') }}/assets/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('front') }}/assets/counter-up/jquery.counterup.min.js"></script>
    <script src="{{ asset('front') }}/assets/gmap3/gmap3.min.js"></script>
    <script src="{{ asset('front') }}/assets/validator/validator.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g"></script>
    <script src="{{ asset('front') }}/js/app.js"></script>
</body>

</html>
