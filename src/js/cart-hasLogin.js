


$(function(){
    //@prepros-prepend select.js

    $('.costDirections').on('click', function () {
        $('#popup').css('display', 'block')
        $('body').css('overflow', 'hidden')
        $('html').css('overflow', 'hidden')
        
        $('#popup .popbox > ul > li').each(function(i){
            let boxH = $(`#popup ul li:nth-child(${i+1}) .boxColor`).outerHeight() - $(`#popup ul li:nth-child(${i+1}) .popupBox`).height()
            $(`#popup ul li:nth-child(${i+1}) .popupBox`).on('scroll', function(){
                let boxS = $(this).scrollTop()
                if(boxS >= boxH - 10){
                    $(`#popup ul li:nth-child(${i+1}) .checkBoxPop label`).removeClass('disable')
                }
            })
        })
    });
    $('#popup .closeIcon').on('click', function () {
        $('#popup').css('display', 'none')
        $('body').css('overflow', 'hidden auto')
        $('html').css('overflow', 'hidden auto')
    });
    
    $('.costDirectionsAdd').on('click', function () {
        $('#popup2').css('display', 'block')
        $('body').css('overflow', 'hidden')
        $('html').css('overflow', 'hidden')
    });
    $('#popup2 .closeIcon').on('click', function () {
        $('#popup2').css('display', 'none')
        $('body').css('overflow', 'hidden auto')
        $('html').css('overflow', 'hidden auto')
    });

    $('.addPeopleBtn').on('click', function () {
        $('#popup2').css('display', 'none')
        $('#popup3').css('display', 'block')
        $('body').css('overflow', 'hidden')
        $('html').css('overflow', 'hidden')
    });
    $('#popup3 .closeIcon').on('click', function () {
        $('#popup3').css('display', 'none')
        $('body').css('overflow', 'hidden auto')
        $('html').css('overflow', 'hidden auto')
    });
    let num = 0
    $('input').on('change', function () {
        num = 0
        for(let i=1; i<4; i++){
            if($(`#agreed_${i}`).prop('checked')){
                num++
            }
        }
        if(num == 3){
            $('.blueBox').addClass('hasCheckedBox')
            $('#popup .allBtn .btn').removeClass('disable')
        }else{
            $('.blueBox').removeClass('hasCheckedBox')
            $('#popup .allBtn .btn').addClass('disable')
        }
    });
    $('.topList .nameBox').on('click', function () {
        if($(window).width() < 768){
            if($(this).parents('.memberList').hasClass('openBox')){
                $(this).parents('.memberList').removeClass('openBox')
                $(this).parents('.memberList').find('.bottomList').slideUp();
            }else{
                $(this).parents('.memberList').addClass('openBox')
                $(this).parents('.memberList').find('.bottomList').slideDown();
            }
        }
    });
});