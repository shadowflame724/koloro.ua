/**
 * Created by glalex on 03.07.2017.
 */

"use strict";

$(function () {
    var namingSlider = $(".naming-slider"),
        conceptSlider = $(".concept-slider");

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

    $(conceptSlider).owlCarousel({
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

    // Go to the next item
    $('.concept-slider-cont .arrow-left-btn').click(function() {
        $(conceptSlider).trigger('prev.owl.carousel');
    });
    // Go to the previous item
    $('.concept-slider-cont .arrow-right-btn').click(function() {
        $(conceptSlider).trigger('next.owl.carousel');
    });


});
