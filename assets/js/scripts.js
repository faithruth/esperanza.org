jQuery(document).ready(function () {;
    jQuery('.esperanza-slider').owlCarousel({
        center: true,
        loop:true,
        margin:10,
        nav: true,
        dots: true,
        autoplay: false,
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
    });
    jQuery('.esperanza-testimonials').owlCarousel({
        loop:true,
        margin:10,
        nav: false,
        dots: true,
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