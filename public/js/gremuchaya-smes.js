/**
 * Created by glalex on 27.06.2017.
 */

"use strict";

$(function () {
    var namingSlider = $(".naming-slider");

    $(namingSlider).owlCarousel({
        loop:true,
        margin:0,
        items:1,
        nav:false,
        autoplay:false,

        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:5000, //Время смены слайда
        autoplayHoverPause:false

    });

    // ***************** REGISTER EVENT HANDLERS *******************

// Go to the next item
    $('.naming-slider-cont .arrow-left-btn').click(function() {
        $(namingSlider).trigger('prev.owl.carousel');
    });
// Go to the previous item
    $('.naming-slider-cont .arrow-right-btn').click(function() {
        $(namingSlider).trigger('next.owl.carousel');
    });

    // ANIMATION BLOCK
    if (!isMobileViewFlag) {

        $('.packages-cont .image-left').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInLeft',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.packages-cont .image-right').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInRight',
            classToRemove: 'transparent',
            offset: 100,
            delay: 1000
        });

        $('.mouses-traps-cont .image-left').addClass("transparent").viewportChecker({
            classToAdd: 'animated pulse',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.mouses-traps-cont .image-right').addClass("transparent").viewportChecker({
            classToAdd: 'animated pulse',
            classToRemove: 'transparent',
            offset: 100,
            delay: 1000
        });

        $('.concept-1-cont img, .concept-2-cont img, .concept-3-cont img, .logo-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated pulse',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.infographic-1-cont img, .infographic-2-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInUp',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        
    }
});

