/**
 * Created by Glalex on 29.05.2017.
 */
'use strict';

var isMobileViewFlag = true;

window.addEventListener('load', function() {

    var busyFlag = false,
        mobileViewWidth = 768,

        pageFirstLoadingFlag = true;

    // ********************************************************************************
    resizeWindowHandler();
    scrollWindowHandler(); // initial call!!!
    // ********************************************************************************

    // **********************  EVENT HANDLERS *************************

    function readMoreBtnHandler() {
        $(this.parentNode.querySelector(".for-read-more")).slideToggle();

        $(this).toggleText("Читать дальше", "Скрыть");
    }

    function resizeWindowHandler(event) {
        if (window.innerWidth < mobileViewWidth) {
            isMobileViewFlag = true;
        } else {
            isMobileViewFlag = false;
        }
    }

    function scrollWindowHandler(event) {
        var	tempOffset;

        // $.fn.extend({
        //     animateCss: function (animationName) {
        //         var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        //         this.addClass('animated ' + animationName).one(animationEnd, function() {
        //             $(this).removeClass('animated ' + animationName);
        //         });
        //     }
        // });

        if (window.innerWidth < mobileViewWidth) {
            tempOffset = window.innerHeight / 3;
        } else {
            tempOffset = window.innerHeight / 1.4;
        }

        var	currentPosition = document.body.scrollTop ?
            (document.body.scrollTop + tempOffset) :
            (document.documentElement.scrollTop + tempOffset);

    }

    // ************************************************************************************
    // ***************** REGISTER EVENT HANDLERS *******************

    $(".read-more-btn").on("click", readMoreBtnHandler);

    window.addEventListener('scroll', scrollWindowHandler);
    window.addEventListener('resize', resizeWindowHandler);

    // ************************************************************************************

    // ANIMATION BLOCK
    if (!isMobileViewFlag) {

        // ****************************************************************************
        // *************    GENERAL ANIMATIONS FOR ALL PORTFOLIO PAGES    *************
        $('.contact-us-form').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.info-right').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInRight',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.info-left .info-left-title').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInLeft',
            classToRemove: 'transparent',
            offset: 100,
            delay: 1000
        });
    }


});