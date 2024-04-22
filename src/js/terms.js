$(function () {
    //@prepros-prepend template/top_menu.js
    
    $('.tabBtn li').on('click', function () {
        $(this).addClass('active')
        $(this).siblings().removeClass('active')
        $('.contain li').removeClass('active')
        $('.contain li').eq($(this).index()).addClass('active')
    });
    $('.tabBtn select').on('change', function () {
        $('.contain li').removeClass('active')
        $('.contain li').eq($(this).val()).addClass('active')
    });

    let pageNum = location.href.split('?')[1].split('pageList=')[1]
    if(pageNum !== '' || pageNum !== null || pageNum !== undefined){
        $('.item_menu_list.slides li').removeClass('active')
        $('.item_menu_list.slides li').eq(pageNum).addClass('active')
        $('.tabBtn select option').eq(pageNum).prop('selected', 'true')
        $('.contain li').removeClass('active')
        $('.contain li').eq(pageNum).addClass('active')
    }
})