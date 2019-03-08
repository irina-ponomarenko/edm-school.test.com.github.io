$(document).ready(function() {

    $("#owl-example").owlCarousel({
        items : 4,
        itemsDesktop : [1199,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1],
        singleItem : false,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            768:{
                items:2,
                nav:false
            },
            1350:{
                items:2,
                nav:true
            },
            1560:{
                items:4,
                nav:true,
                loop:false
            }
        }
    });

    $("#owl-example1").owlCarousel({
        items : 4,
        itemsDesktop : [1199,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1],
        singleItem : false,
        navigation : true,
        navigationText : ["prev","next"],
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    });
    $("#owl-example2").owlCarousel({
        items : 6,
        itemsDesktop : [1199,6],
        itemsTablet: [768,4],
        itemsMobile : [479,1],
        singleItem : false,
        navigation : true,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:true
            },
            600:{
                items:4,
                nav:true
            },
            1000:{
                items:6,
                nav:true,
                loop:true
            }
        }
    });

    $("#owl-example3").owlCarousel({
        items : 3,
        itemsDesktop : [1199,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1],
        singleItem : false,
        navigation : true,
        pagination: false,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:true
            },
            1000:{
                items:3,
                nav:true,
                loop:true
            }
        }
    });

    $("form .tell").mask("+7(999) 999-9999");

    if ($(window).width() >= 1150) {
        var nav = $('.nav-top');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 400) {
                nav.addClass("f-nav");
            } else {
                nav.removeClass("f-nav");
            }
        });
    };

     $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: false,
    itemWidth: 180,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: true,
    slideshow: false,
    sync: "#carousel"
  });

});