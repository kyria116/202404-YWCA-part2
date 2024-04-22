


$(function(){
    //@prepros-prepend plugin/swiper-bundle.min.js
    //@prepros-prepend template/top_menu.js
    
    var swiperBanner = new Swiper(".banner .mySwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    $('.like').on('click', function () {
        $(this).toggleClass('active')
    });

    if(localStorage.scrollTop != undefined){
        $(window).scrollTop(localStorage.scrollTop)
    }
    $('.item_menu_list li').on('click', function(){
        localStorage.setItem('scrollTop', $(window).scrollTop())
    })
});