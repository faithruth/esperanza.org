jQuery(document).ready(function () {;
    jQuery('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav: false,
        dots: false,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            769:{
                items:1
            },
            996:{
                items:3
            }
        }
    })
    jQuery('.owl-carousel').show();
});