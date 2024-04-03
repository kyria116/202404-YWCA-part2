
let winscroll = $(window).scrollTop();
let winH = $(window).height();
let winW = $(window).width();
    
//--------------MENU-------------------

//判斷active
let ary = { 'About': 0, 'News': 1, 'Service': 2, 'Case': 3, 'ESG': 4, 'Contact': -1 }
const activeMenu = $('.entxt').text()
$('ul.mmenu > li').eq(ary[activeMenu]).addClass('active')

$('.menu3 .member.hasLoginIcon').on('click', function () {
    if (winW < 768) {
        $(this).siblings().slideToggle();
    }
});
$('.menu2 .member.hasLoginIcon').on('click', function () {
    if (winW < 768) {
        $(this).siblings().toggleClass('active');
        $('.menu2').toggleClass('mb195')
    }
});

//-------------------HAMBUR 開合--------------------
$('.menu-ham').on('click', function () {
    $('.menu-ham').toggleClass('hamActive');
    $('body').toggleClass('openMenu');
    $('.menu3 .menu-second').css('display', 'none')

    if ($('.menu-ham').hasClass('hamActive')) {
        $('html').css('overflow-y', 'hidden');
    } else {
        $('html').css('overflow-y', 'auto');
        $('.menu li').removeClass('active')
    }
});


//當畫面大於768時，移除漢堡選單目前開闔的情況
$(window).on('resize', function () {
    winW = $(window).width();
    if (winW > 767) {
        $('body').removeClass('openMenu');
        $('.menu-ham').removeClass('hamActive');
    }
});


