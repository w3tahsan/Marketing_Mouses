(function($) {
    "use strict";

    /*-------------------------------------
    After Load All Content Add a Class In Body
    -------------------------------------*/
    $(window).on('load', addNewClass);

    function addNewClass() {
        $('body').imagesLoaded().done(function(instance) {
            $('body').addClass('loaded');
        });
    }

    /*-------------------------------------
    Count Up
    -------------------------------------*/
    var counterContainer = $('.counter');
    if (counterContainer.length) {
        counterContainer.counterUp({
            delay: 50,
            time: 5000
        });
    }

    /*-------------------------------------
    Intersection Observer
    -------------------------------------*/
    if (!!window.IntersectionObserver) {
        let observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active-animation");
                    //entry.target.src = entry.target.dataset.src;
                    observer.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: "0px 0px -100px 0px"
        });
        document.querySelectorAll('.has-animation').forEach(block => {
            observer.observe(block)
        });
    } else {
        document.querySelectorAll('.has-animation').forEach(block => {
            block.classList.remove('has-animation')
        });
    }

    /*-------------------------------------
	Project slider
	------------------------------------*/
    $(".sliderProjectOne").each(function(i) {
        let sliderProjectOne = $(this).get(0);
        let prev = $(this).parents(".slider-btn-holder").find(".slider-btn-prev").get(0);
        let next = $(this).parents(".slider-btn-holder").find(".slider-btn-next").get(0);

        let thumbS = new Swiper(sliderProjectOne, {
            loop: true,
            slidesPerView: 1,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            speed: 800,
            spaceBetween: 30,
            navigation: {
                nextEl: next,
                prevEl: prev,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
    });

    /*-------------------------------------
	Project slider
	------------------------------------*/
    $(".sliderProjectTwo").each(function(i) {
        let sliderProjectOne = $(this).get(0);
        let prev = $(this).parents(".slider-btn-holder").find(".slider-btn-prev").get(0);
        let next = $(this).parents(".slider-btn-holder").find(".slider-btn-next").get(0);

        let thumbS = new Swiper(sliderProjectOne, {
            loop: true,
            slidesPerView: 1,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            speed: 800,
            spaceBetween: 30,
            navigation: {
                nextEl: next,
                prevEl: prev,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                },
            },
        });
    });

    /*-------------------------------------
	Project slider
	------------------------------------*/
    $(".sliderProjectThree").each(function(i) {
        let sliderProjectThree = $(this).get(0);
        let prev = $(this).parents(".slider-btn-holder").find(".slider-btn-prev").get(0);
        let next = $(this).parents(".slider-btn-holder").find(".slider-btn-next").get(0);

        let thumbS = new Swiper(sliderProjectThree, {
            loop: true,
            slidesPerView: 1,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            speed: 800,
            spaceBetween: 30,
            centeredSlides: true,
            navigation: {
                nextEl: next,
                prevEl: prev,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                992: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 2,
                },
            },
        });
    });

    /*-------------------------------------
	Brand slider
	------------------------------------*/
    $(".sliderBrandOne").each(function(i) {
        let sliderBrandOne = $(this).get(0);

        let thumbS = new Swiper(sliderBrandOne, {
            loop: true,
            slidesPerView: 1,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            speed: 800,
            spaceBetween: 30,
            navigation: false,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 5,
                },
            },
        });
    });

    /*-------------------------------------
	Testimonial slider
	------------------------------------*/
    $(".sliderTestimonialOne").each(function(i) {
        let sliderTestimonialOne = $(this).get(0);
        let prev = $(this).parents(".slider-btn-holder").find(".slider-btn-prev").get(0);
        let next = $(this).parents(".slider-btn-holder").find(".slider-btn-next").get(0);

        let thumbS = new Swiper(sliderTestimonialOne, {
            loop: true,
            slidesPerView: 1,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            speed: 800,
            spaceBetween: 30,
            navigation: {
                nextEl: next,
                prevEl: prev,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                992: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 2,
                },
            },
        });
    });

    /*-------------------------------------
	Related Post slider
	------------------------------------*/
    let sliderBlog = $('.sliderBlog');
    if (sliderBlog) {
        let sliderBlog = new Swiper(".sliderBlog", {
            slidesPerView: 4,
            loop: true,
            slideToClickedSlide: true,
            spaceBetween: 30,
            autoplay: {
                delay: 2000,
            },
            speed: 800,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 2,
                },
            },
        });
    }

    /*-------------------------------------
  	Jquery Serch Box
  	-------------------------------------*/
    $('a[href="#template-search"]').on("click", function(event) {
        event.preventDefault();
        var target = $("#template-search");
        target.addClass("open");
        setTimeout(function() {
            target.find('input').focus();
        }, 600);
        return false;
    });

    $("#template-search, #template-search button.close").on("click keyup", function(event) {
        if (
            event.target === this ||
            event.target.className === "close" ||
            event.keyCode === 27
        ) {
            $(this).removeClass("open");
        }
    });

    $(window).on('scroll', function() {

        // Back Top Button
        if ($(window).scrollTop() > 700) {
            $('.return-to-top').addClass('back-top');
        } else {
            $('.return-to-top').removeClass('back-top');
        }

        // Sticky Menu
        if ($('header').hasClass('sticky-on')) {
            var stickyPlaceHolder = $("#sticky-placeholder"),
                menu = $("#navbar-wrap"),
                menuH = menu.outerHeight(),
                topbarH = $('#topbar-wrap').outerHeight() || 0,
                targrtScroll = topbarH,
                header = $("header");
            if ($(window).scrollTop() > targrtScroll) {
                header.addClass('sticky');
                stickyPlaceHolder.height(menuH);
            } else {
                header.removeClass('sticky');
                stickyPlaceHolder.height(0);
            }
        }

        // Sticky Menu
        if ($('header.header4').hasClass('sticky-on')) {
            var stickyPlaceHolder = $("#sticky-placeholder"),
                menu = $("#navbar-wrap"),
                menuH = menu.outerHeight(),
                topbarH = 60,
                targrtScroll = topbarH,
                header = $("header");
            if ($(window).scrollTop() > targrtScroll) {
                header.addClass('sticky');
                stickyPlaceHolder.height(menuH);
            } else {
                header.removeClass('sticky');
                stickyPlaceHolder.height(0);
            }
        }
    });

    /*-------------------------------------
    	Background image
    	-------------------------------------*/
    $("[data-bg-image]").each(function() {
        var img = $(this).data("bg-image");
        $(this).css({
            backgroundImage: "url(" + img + ")"
        });
    });

    /*-------------------------------------
  	Google Map
  	-------------------------------------*/
    $('.map-box').each(function() {
        var $this = $(this),
            key = $this.data('key'),
            lat = $this.data('lat'),
            lng = $this.data('lng'),
            mrkr = $this.data('mrkr');

        $this.gmap3({
                center: [-37.81618, 144.95692],
                zoom: 12,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    }, {
                        "color": "#333333"
                    }, {
                        "lightness": 40
                    }]
                }, {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fefefe"
                    }, {
                        "lightness": 17
                    }, {
                        "weight": 1.2
                    }]
                }, {
                    "featureType": "administrative.country",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "saturation": "-9"
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#e8e8e8"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "landscape.natural.landcover",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "saturation": "-4"
                    }, {
                        "color": "#cdcdcd"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#d4f1c9"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#d4f1c9"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffeea4"
                    }, {
                        "lightness": 60
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#f5d681"
                    }, {
                        "lightness": 30
                    }, {
                        "weight": 1
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 18
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f2f2f2"
                    }, {
                        "lightness": 19
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#aadaff"
                    }, {
                        "lightness": 17
                    }]
                }]
            })
            .marker(function(map) {
                return {
                    position: map.getCenter(),
                    icon: mrkr
                };
            })
    });
    /*-------------------------------------
    Video Popup
    -------------------------------------*/
    $(window).on("load", function() {
        let videoPopUp = $(".play-btn");
        if (videoPopUp.length) {
            videoPopUp.magnificPopup({
                type: "iframe",
                iframe: {
                    markup: '<div class="mfp-iframe-scaler">' +
                        '<div class="mfp-close"></div>' +
                        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                        "</div>",
                    patterns: {
                        youtube: {
                            index: "youtube.com/",
                            id: "v=",
                            src: "https://www.youtube.com/embed/%id%?autoplay=1",
                        },
                        vimeo: {
                            index: "vimeo.com/",
                            id: "/",
                            src: "//player.vimeo.com/video/%id%?autoplay=1",
                        },
                    },
                    srcAction: "iframe_src",
                },
            });
        }
        // wow
        wow.init();
        // Page Preloader
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
    });

    /*-------------------------------------
    WOW
    -------------------------------------*/
    var wow = new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 0,
        mobile: false,
        live: true,
        scrollContainer: null,
    });

    /*-------------------------------------
    Mobile Menu Toggle
    -------------------------------------*/
    $(".sidebarBtn").on("click", function(e) {
        e.preventDefault();
        if ($(".fxt-slide-nav").is(":visible")) {
            $(".fxt-slide-nav").slideUp();
            $("body").removeClass("slidemenuon");
        } else {
            $(".fxt-slide-nav").slideDown();
            $("body").addClass("slidemenuon");
        }
    });

    /*-------------------------------------
    Mobile Menu Dropdown
    -------------------------------------*/
    var a = $(".offscreen-navigation .menu");

    if (a.length) {
        a.children("li").addClass("menu-item-parent");
        a.find(".menu-item-has-children > a").on("click", function(e) {
            e.preventDefault();
            $(this).toggleClass("opened");
            var n = $(this).next(".sub-menu"),
                s = $(this).closest(".menu-item-parent").find(".sub-menu");
            a.find(".sub-menu").not(s).slideUp(250).prev("a").removeClass("opened"),
                n.slideToggle(250);
        });
        a.find(".menu-item:not(.menu-item-has-children) > a").on(
            "click",
            function(e) {
                $(".rt-slide-nav").slideUp();
                $("body").removeClass("slidemenuon");
            }
        );
    }

    /*-------------------------------------
    Contact Form initiating
    -------------------------------------*/
    var contactForm = $('#contact-form');
    if (contactForm.length) {
        contactForm.validator().on('submit', function(e) {
            var $this = $(this),
                $target = contactForm.find('.form-response');
            if (e.isDefaultPrevented()) {
                $target.html("<div class='alert alert-success'><p>Please select all required field.</p></div>");
            } else {
                $.ajax({
                    url: "php/mailer.php",
                    type: "POST",
                    data: contactForm.serialize(),
                    beforeSend: function() {
                        $target.html("<div class='alert alert-info'><p>Loading ...</p></div>");
                    },
                    success: function(text) {
                        if (text === "success") {
                            $this[0].reset();
                            $target.html("<div class='alert alert-success'><p>Message has been sent successfully.</p></div>");
                        } else {
                            $target.html("<div class='alert alert-success'><p>" + text + "</p></div>");
                        }
                    }
                });
                return false;
            }
        });
    }

    /*-------------------------------------
    Anchor Tag - Prevent Default
    -------------------------------------*/
    $('a[href=\\#]').on('click', function(e) {
        e.preventDefault();
    });

})(jQuery);