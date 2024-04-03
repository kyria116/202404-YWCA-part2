
let topbtnH = $('.fixBoxBtn').outerHeight();


$(window).on('scroll', gotop);
$(window).on('resize', gotop);
function gotop(){
    let winH = $(window).height();
    let winscroll = $(window).scrollTop();
    let topBtnStop = $(document).height() - winH - $('footer').outerHeight() + topbtnH + 20;
    let topPc = $(document).height() - $('footer').outerHeight() - 20;
    
    //show info icon
    
    if(winscroll > 0){
        $('.fixBoxBtn').addClass('show');
    }else{
        $('.fixBoxBtn').removeClass('show');
    }
    if(winscroll >= topBtnStop){
        $('.fixBoxBtn').addClass('change');
        $('.change').css('bottom', 'auto');
        $('.change').css('top', topPc);
    }else{
        $('.fixBoxBtn').removeClass('change');
        $('.fixBoxBtn').removeAttr('style');
    } 

    //向上scroll
    $('.fixBtn').on('click',function(){
        $('html,body').stop(true).animate({
            scrollTop: 0
        }, 1000);
    })
}