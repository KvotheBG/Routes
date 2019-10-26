// loader
$(document).ready(function() {
    $(".loader").delay(0).fadeOut("slow");
    $("#overlayer").delay(0).fadeOut("slow");
});

// home ul
$('.home-ul li').css('line-height', String($('.home-img').height()/3) + 'px');
$(window).resize(function() {
    $('.home-ul li').css('line-height', String($('.home-img').height()/3) + 'px');
});