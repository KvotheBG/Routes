// loader
$(document).ready(function() {
    $(".loader").delay(0).fadeOut("slow");
    $("#overlayer").delay(0).fadeOut("slow");
});

// home ul
$(document).ready(function() {
	$('.home-ul li').css('line-height', String($('.home-img').height()/3) + 'px');
});
$(window).resize(function() {
    $('.home-ul li').css('line-height', String($('.home-img').height()/3) + 'px');
});

// success alert fade out effect
window.setTimeout(function() {
    $(".alert-fade").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);