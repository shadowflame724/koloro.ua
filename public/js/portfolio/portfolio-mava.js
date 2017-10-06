/**
 * Created by glalex on 05.10.2017.
 */

$(function () {
    // ANIMATION BLOCK
    if (!isMobileViewFlag) {

        // ****************************************************************************
        // *************   ANIMATIONS FOR THIS PAGE    *************
        $('.top-container .image-container img').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });


        $('.mava-mask-cont, .mava-logo-cont').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInUp',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.mava-packages-cont-1 .package-img-cont').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });




    }
});
