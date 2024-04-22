$(function () {
    //@prepros-prepend plugin/swiper-bundle.min.js

    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 1,
        slidesPerView: 4.3,
        navigation: {
            nextEl: ".smallBox .swiper-button-next",
            prevEl: ".smallBox .swiper-button-prev",
        },
        breakpoints: {
            992: {
                slidesPerView: 5,
                spaceBetween: 2
            }
        },
    });
    var swiper2 = new Swiper(".mySwiper2", {
        effect: "fade",
        navigation: {
            nextEl: ".bigBox .swiper-button-next",
            prevEl: ".bigBox .swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
    $('.costDirections').on('click', function () {
        $('#popup').css('display', 'block')
        $('body').css('overflow', 'hidden')
        $('html').css('overflow', 'hidden')
    });
    $('.closeIcon').on('click', function () {
        $('#popup').css('display', 'none')
        $('body').css('overflow', 'hidden auto')
        $('html').css('overflow', 'hidden auto')
    });
    $('.s_like').on('click', function () {
        $(this).toggleClass('active')
    });

});