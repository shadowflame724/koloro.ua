/**
 * Created by glalex on 05.10.2017.
 */
'use strict';

$(function () {

    var topContainer = document.querySelector(".top-container"),
        coffeeBeansGold = document.querySelector(".top-container .coffee-beans-gold"),
        coffeeBeans1 = document.querySelector(".top-container .coffee-beans-1"),
        coffeeBeans2 = document.querySelector(".top-container .coffee-beans-2"),
        coffeeBeansGold3 = document.querySelector(".top-container .coffee-beans-gold-3");

    var imageCont1 = document.querySelector(".image-1"),
        coffeeBeansGold2 = document.querySelector(".image-1 .coffee-beans-gold-2"),
        coffeeBeans4 = document.querySelector(".image-1 .coffee-beans-4"),
        coffeeBeans3 = document.querySelector(".image-1 .coffee-beans-3"),
        coffeeBeansGold4 = document.querySelector(".image-1 .coffee-beans-gold-4");

    var imageCont2 = document.querySelector(".image-2"),
        bannerGoldBeans = document.querySelector(".image-2 .banner-gold-beans");

    scrollWindowHandler(); // initial call!!!

    // // ****************************************************************
    //
    // // **********************  EVENT HANDLERS *************************

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

        // images animations
        if (!isMobileViewFlag) {

            if ( ((currentPosition) >= topContainer.offsetTop) &&
                ((currentPosition - tempOffset) < topContainer.offsetTop + topContainer.clientHeight)
            ) {
                glalexParallax(coffeeBeansGold, 1, 50, currentPosition, scrollPreviousPosition);
                glalexParallax(coffeeBeans1, -1, 100, currentPosition, scrollPreviousPosition);
                glalexParallax(coffeeBeans2, 1, 20, currentPosition, scrollPreviousPosition);
                glalexParallax(coffeeBeansGold3, -1, 40, currentPosition, scrollPreviousPosition);
            }

            if ( ((currentPosition) >= imageCont1.offsetTop) &&
                ((currentPosition - tempOffset) < imageCont1.offsetTop + imageCont1.clientHeight)
            ) {
                glalexParallax(coffeeBeansGold2, 1, 50, currentPosition, scrollPreviousPosition);
                glalexParallax(coffeeBeans4, -1, 100, currentPosition, scrollPreviousPosition);
                glalexParallax(coffeeBeans3, 1, 20, currentPosition, scrollPreviousPosition);
                glalexParallax(coffeeBeansGold4, -1, 40, currentPosition, scrollPreviousPosition);
            }

            if ( ((currentPosition) >= imageCont2.offsetTop) &&
                ((currentPosition - tempOffset) < imageCont2.offsetTop + imageCont2.clientHeight)
            ) {
                glalexParallax(bannerGoldBeans, 1, 100, currentPosition, scrollPreviousPosition);
            }
        }

        scrollPreviousPosition = currentPosition;

    }

    // direction = 1 : scroll up --> parallax up
    // direction = -1 : scroll up --> parallax down
    function glalexParallax(element, direction, divCoef, curPos, prevPos) {
        var tempStyle = getComputedStyle(element);

        if (curPos < prevPos) {
            // move up
            element.style.top = parseInt(tempStyle.top) + (-direction) * window.innerHeight / divCoef + 'px';
        } else {
            // move down
            element.style.top = parseInt(tempStyle.top) + direction * window.innerHeight / divCoef + 'px';
        }
    }

    // ***************** REGISTER EVENT HANDLERS *******************

    window.addEventListener('scroll', scrollWindowHandler);


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