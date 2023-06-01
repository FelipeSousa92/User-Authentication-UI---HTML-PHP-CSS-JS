$(document).ready(function () {
    $(window).scroll(function(){ 
        if($(this).scrollTop() > 8){
            $('header').addClass('mobile-menu-scroll');
        } else {
            $('header').removeClass('mobile-menu-scroll');
        }
    });
});