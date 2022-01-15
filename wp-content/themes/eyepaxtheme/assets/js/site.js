jQuery(document).ready(function ($) {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.header').addClass('header-scrolled');
            $('.logo').addClass('logo-scrolled');
        } else {
            $('.header').removeClass('header-scrolled');
            $('.logo').removeClass('logo-scrolled');
        }
    });

    jQuery('.banner-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: false,
        autoPlaySpeed: 3000,
        nav: false,
        dots: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    jQuery('.testimonials-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        autoPlaySpeed: 3000,
        margin: 10,
        nav: false,
        dots: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    
});