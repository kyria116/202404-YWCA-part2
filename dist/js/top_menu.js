var $window=$(window),win_W=$window.width();function slider_ul_list(i){let n,e=$("#"+i),t=e.find(".item_menu_Box").width(),o=e.find("ul").width(),l=e.find("li"),d=e.find(".active").index(),s=(winW-t)/2,f=(e.find("li.active").offset().left,0),a=0,m=new Array,r=new Array;l.each((function(){m[a]=$(this).offset().left,f=m[a]-s,f<o-t&&(n=a),r[a]=f,a++})),$window.on("resize",(function(){win_W=$window.width(),o=e.find("ul").width(),t=e.find(".item_menu_Box").width(),marginAuto=($(".item_menu_Box").width()-$(".item_menu_list li").width())/2,o>t?(e.addClass("open_flexslider"),e.find(".item_menu_Box").scrollLeft(r[d]-marginAuto)):e.removeClass("open_flexslider")})).resize(),$("#"+i+" .rbtn").on("click",(function(){r[d]<o-t&&(d++,e.find(".item_menu_Box").stop().animate({scrollLeft:r[d]},600))})),$("#"+i+" .lbtn").on("click",(function(){r[d]>0&&(d--,e.find(".item_menu_Box").stop().animate({scrollLeft:r[d]},600))})),$("#"+i+" .item_menu_Box").on("scroll",(function(){let i=e.find(".item_menu_Box").scrollLeft();i<=0?(e.addClass("mleft"),e.find(".lbtn").addClass("nopage"),e.find(".rbtn").removeClass("nopage")):i>=r[n]?(e.addClass("mright"),e.find(".rbtn").addClass("nopage"),e.find(".lbtn").removeClass("nopage")):(e.removeClass("mleft mright"),e.find(".arrow").removeClass("nopage"))})).scroll()}window.setTimeout((function(){slider_ul_list("top-menu-ul")}),1);