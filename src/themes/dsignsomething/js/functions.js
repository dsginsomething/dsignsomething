jQuery(document).ready(function($) {
    console.log("hello");
    $(".owl-carousel").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:9
        },
        1000:{
            items:12
        }
    },
    navText: ["<i class='ui icon left angle'></i>","<i class='ui icon right angle'></i>"],
});
});