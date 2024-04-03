$(function () {
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
    $('.closeIcon').on('click', function () {
        $('#popup').css('display', 'none')
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

    
});