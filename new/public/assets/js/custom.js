(function ($) {





   $('.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        margin: 0,
        dots: false,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 4000,
        animateOut: 'fadeOut',
        singleItem:true,
        autoWidth:true,
        autoHeight:true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            1000: {
                items: 1
            },
        }
    });
    


})(jQuery)

$(document).ready(function(){
    $(window).resize();
});
