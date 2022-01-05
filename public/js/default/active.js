(function ($) {
    'use strict';

    var saasboxWindow = $(window);

    // :: Preloader Active Code
    saasboxWindow.on('load', function () {
        $('#preloader').fadeOut('10', function () {
            $(this).remove();
        });
    });

    // :: Classy Nav Active Code
    if ($.fn.classyNav) {
        $('#saasboxNav').classyNav();
    }

    // :: Sticky Active Code
    saasboxWindow.on('scroll', function () {
        if (saasboxWindow.scrollTop() > 0) {
            $('.header-area').addClass('sticky');
        } else {
            $('.header-area').removeClass('sticky');
        }
    });

    // :: Welcome Slides Active Code
    if ($.fn.owlCarousel) {
        var welcomeSlider = $('.hero-slides');
        welcomeSlider.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: false,
            nav: true,
            navText: [('<i class="lni-chevron-left"></i>'), ('<i class="lni-chevron-right"></i>')],
        })

        welcomeSlider.on('translate.owl.carousel', function () {
            var layer = $("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        welcomeSlider.on('translated.owl.carousel', function () {
            var layer = welcomeSlider.find('.owl-item.active').find("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });
    }

    // :: Testimonial Slides Active Code
    if ($.fn.owlCarousel) {
        var testimonialSlider = $('.client-feedback-slides');
        testimonialSlider.owlCarousel({
            items: 3,
            margin: 40,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            autoplayTimeout: 5000,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                576: {
                    items: 2,
                    margin: 15
                },
                768: {
                    items: 1
                },
                992: {
                    items: 2
                },
                1700: {
                    items: 3
                }
            }
        })
    }

    // :: Partners Active Code
    if ($.fn.owlCarousel) {
        var partnerSlider = $('.our-partner-slides');
        partnerSlider.owlCarousel({
            items: 6,
            margin: 50,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            autoplayTimeout: 5000,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 2
                },
                480: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                },
                1200: {
                    items: 6
                }
            }
        })
    }

    // :: Portfolio Active Code
    if ($.fn.owlCarousel) {
        var portSlides = $('.portfolio-slides');
        portSlides.owlCarousel({
            items: 4,
            margin: 10,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            autoplayTimeout: 5000,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    }

    // :: Portfolio Active Code
    if ($.fn.owlCarousel) {
        var portSlides2 = $('.portfolio-slides-2');
        portSlides2.owlCarousel({
            items: 3,
            margin: 10,
            loop: true,
            autoplay: true,
            smartSpeed: 800,
            autoplayTimeout: 5000,
            dots: false,
            nav: true,
            navText: [('<i class="lni-chevron-left"></i>'), ('<i class="lni-chevron-right"></i>')],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        })
    }

    // :: Related Slides Active Code
    if ($.fn.owlCarousel) {
        var relatedProdSlides = $('.related-image-carousel');
        relatedProdSlides.owlCarousel({
            items: 4,
            margin: 15,
            loop: true,
            autoplay: true,
            smartSpeed: 500,
            autoplayTimeout: 5000,
            dots: false,
            nav: true,
            navText: [('<i class="lni-chevron-left"></i>'), ('<i class="lni-chevron-right"></i>')],
        })
    }

    // :: Related Slides Active Code
    if ($.fn.owlCarousel) {
        var videoCardSlides = $('.video-card-slides');
        videoCardSlides.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 500,
            autoplayTimeout: 5000,
            dots: false,
            nav: false
        })
    }

    // :: Related Slides Active Code
    if ($.fn.owlCarousel) {
        var relatedProjectSlides = $('.related-project-slide');
        relatedProjectSlides.owlCarousel({
            items: 3,
            margin: 30,
            loop: true,
            autoplay: true,
            smartSpeed: 500,
            autoplayTimeout: 5000,
            dots: false,
            nav: true,
            navText: [('<i class="lni-chevron-left"></i>'), ('<i class="lni-chevron-right"></i>')],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        })
    }

    // :: Project Details Slide Active Code
    if ($.fn.owlCarousel) {
        var projectDetailsShotSlide = $('.project-details-shots-slide');
        projectDetailsShotSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            autoplay: true,
            smartSpeed: 500,
            autoplayTimeout: 5000,
            dots: false,
            nav: true,
            navText: [('<i class="lni-chevron-left"></i>'), ('<i class="lni-chevron-right"></i>')],
        })
    }

    // :: Masonary Gallery Active Code
    if ($.fn.imagesLoaded) {
        $('.saasbox-portfolio-filter').imagesLoaded(function () {
            // filter items on button click
            $('.portfolio-menu').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });

            // init Isotope
            var $grid = $('.saasbox-portfolio-filter').isotope({
                itemSelector: '.single-portfolio-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.single-portfolio-item'
                }
            });
        });
    }

    // :: Gallery Menu Style Code
    $('.portfolio-menu button.btn').on('click', function () {
        $('.portfolio-menu button.btn').removeClass('active');
        $(this).addClass('active');
    })

    // :: Magnific Popup Active Code
    if ($.fn.magnificPopup) {
        $('.video-play-btn').magnificPopup({
            type: 'iframe'
        });
    }

    if ($.fn.magnificPopup) {
        $('.image-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            removalDelay: 500,
            mainClass: 'mfp-fade',
            preloader: true,
            callbacks: {
                beforeOpen: function () {
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            closeOnContentClick: true,
            midClick: true
        });
    }

    // :: Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // :: WOW Active Code
    if (saasboxWindow.width() > 480) {
        new WOW().init();
    }

    // :: Jarallax Active Code
    if ($.fn.jarallax) {
        $('.jarallax').jarallax({
            speed: 0.5
        });
    }

    // :: Scrollup Active Code
    if ($.fn.scrollUp) {
        saasboxWindow.scrollUp({
            scrollSpeed: 1100,
            scrollText: '<i class="lni-chevron-up"></i>'
        });
    }

    // :: Counter Up Active Code
    if ($.fn.counterUp) {
        $('.rs-counter').counterUp({
            delay: 15,
            time: 1500
        });
    }

    // :: Prevent Default 'a' Click
    $('a[href="#"]').on('click', function ($) {
        $.preventDefault();
    });

    // :: Service Active Code
    $('.service-card').on('mouseenter', function () {
        $('.service-card').removeClass('active');
        $(this).addClass('active');
    })

    // :: Animated Headline Active Code
    if ($.fn.animatedHeadline) {
        $('.animated--headline').animatedHeadline({
            animationType: 'clip'
        });
    }

    // :: Password Strength Active Code
    if ($.fn.passwordStrength) {
        $('#registerPassword').passwordStrength({
            minimumChars: 8
        });
    }

    // :: Password Hide Show Active Code
    var inputPassword = $('.input-psswd');
    $('.label-psswd').on('click', function () {
        if (inputPassword.attr('psswd-shown') == 'false') {
            inputPassword.removeAttr('type');
            inputPassword.attr('type', 'text');
            inputPassword.removeAttr('psswd-shown');
            inputPassword.attr('psswd-shown', 'true');
        } else {
            inputPassword.removeAttr('type');
            inputPassword.attr('type', 'password');
            inputPassword.removeAttr('psswd-shown');
            inputPassword.attr('psswd-shown', 'false');
        }
        $(this).toggleClass("active");
    });
    
    // :: Countdown Active Code
    if ($.fn.countdown) {
        $('#csClock').countdown('2022/05/31', function (event) {
            $(this).html(event.strftime('<div>%D <span>Day</span></div> <div>%H <span>Hour</span></div> <div>%M <span>Min</span></div> <div>%S <span>Sec</span></div>'));
        });
    }

    $('.video-bg').height($('.video-bg').width() * 9 / 16);

    // if ($.fn.owlCarousel) {        
    //     $('.history-card-carousel').owlCarousel({
    //         items: 1,
    //         loop: true,
    //         navigation: false,
    //         dots: false,
    //         autoplayTimeout: 3000,
    //         autoplay: true
    //     });
    // }

})(jQuery);