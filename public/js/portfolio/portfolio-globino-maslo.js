/**
 * Created by Glalex on 06.03.2017.
 */
'use strict';

window.addEventListener('load', function() {

    var busyFlag = false,
        mobileViewWidth = 768,

        pageFirstLoadingFlag = true,
        isMobileViewFlag = true,
        topImageFirstTypingFlag = true;

    var patternsLeftState = 0,
        patternsRightState = 0,
        portrait1State = 0,
        arrow1State = 0,
        arrow2State = 0,
        arrow3State = 0,
        landscapePaintingState = 0;

    var boxesArray = $('.boxes-container img').addClass("transparent");
    var boxesIndexGlobal = 0,
        boxesTimer,
        boxesContainerFirstFlag = false;

    var companyStage2 = document.querySelector(".company-stage-2"),
        boxesContainer = document.querySelector(".company-stage-2 .boxes-container");

    var patternsLeft = document.querySelector(".animation-imgs-cont .patterns-left"),
        patternsRight = document.querySelector(".animation-imgs-cont .patterns-right"),

        portraitCont = document.querySelector(".portrait-cont"),
        portrait1 = document.querySelector(".portrait-cont .portrait1"),

        arrow1 = document.querySelector(".animation-arrow-cont .arrow-1"),
        arrow2 = document.querySelector(".animation-arrow-2-cont .arrow-2"),
        arrow3 = document.querySelector(".animation-arrow-3-cont .arrow-3"),

        landscapeCont = document.querySelector(".animation-landscape-cont"),
        landscapePainting = document.querySelector(".animation-landscape-cont .landscape-painting");

    // ********************************************************************************
    resizeWindowHandler();
    scrollWindowHandler(); // initial call!!!
    // ********************************************************************************


    // textElement.style.height = getComputedStyle(textElement).height;
    // var temp = getComputedStyle(portrait1);
    // var temp2;
    // temp2 = parseInt(temp.height) + 25 + "px";
    // portraitCont.style.height = temp2;


    // var tempMaxHeight = Math.max(
    //     parseInt(getComputedStyle(portrait1Images[0]).height),
    //     parseInt(getComputedStyle(portrait1Images[1]).height)
    // );

    // var temp1 = getComputedStyle(portrait1Images[0]).height;
    // var temp2 = getComputedStyle(portrait1Images[1]).height;
    //
    // console.log(temp1);
    // console.log(temp2);

    // var temp = getComputedStyle(landscapePainting);
    // var temp2;
    // temp2 = parseInt(temp.height) + 10 + "px";
    // landscapeCont.style.height = temp2;

    // var img1 = new Image();
    // img1.src = "/images/portfolio/globino-maslo/landscape-painting-animation.png";
    //
    // var temp = getComputedStyle(img1).height;
    // console.log(temp);

    // img1.onload = function(){
    //     // save getComputedStyle(img).height
    //     var temp = getComputedStyle(img1).height;
    //     console.log(temp);
    // };


    setInterval(function () {
        if (patternsLeftState == 0) {
            patternsLeft.src = "/images/portfolio/globino-maslo/patterns-left-animation.png";
            patternsLeftState = 1;
        } else {
            patternsLeft.src = "/images/portfolio/globino-maslo/patterns-left.png";
            patternsLeftState = 0;
        }

        if (patternsRightState == 0) {
            patternsRight.src = "/images/portfolio/globino-maslo/patterns-right-animation.png";
            patternsRightState = 1;
        } else {
            patternsRight.src = "/images/portfolio/globino-maslo/patterns-right.png";
            patternsRightState = 0;
        }

        if (portrait1State == 0) {
            portrait1.src = "/images/portfolio/globino-maslo/portrait1-animation.png";
            portrait1State = 1;
        } else {
            portrait1.src = "/images/portfolio/globino-maslo/portrait1.png";
            portrait1State = 0;
        }

        if (arrow1State == 0) {
            arrow1.src = "/images/portfolio/globino-maslo/arrow-1-animation.png";
            arrow1State = 1;
        } else {
            arrow1.src = "/images/portfolio/globino-maslo/arrow-1.png";
            arrow1State = 0;
        }

        if (arrow2State == 0) {
            arrow2.src = "/images/portfolio/globino-maslo/arrow-2-animation.png";
            arrow2State = 1;
        } else {
            arrow2.src = "/images/portfolio/globino-maslo/arrow-2.png";
            arrow2State = 0;
        }

        if (arrow3State == 0) {
            arrow3.src = "/images/portfolio/globino-maslo/arrow-2-animation.png";
            arrow3State = 1;
        } else {
            arrow3.src = "/images/portfolio/globino-maslo/arrow-2.png";
            arrow3State = 0;
        }

        if (landscapePaintingState == 0) {
            landscapePainting.src = "/images/portfolio/globino-maslo/landscape-painting-animation.png";
            landscapePaintingState = 1;
        } else {
            landscapePainting.src = "/images/portfolio/globino-maslo/landscape-painting.png";
            landscapePaintingState = 0;
        }

    }, 1000);

    // ************************* FUNCTIONS ***************************

    // ****************************************************************

    // **********************  EVENT HANDLERS *************************

    function resizeWindowHandler(event) {
        if (window.innerWidth < mobileViewWidth) {
            isMobileViewFlag = true;
            $(boxesArray).removeClass("transparent");
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

        if (!isMobileViewFlag) {

            if ( (currentPosition > companyStage2.offsetTop + boxesContainer.offsetTop) &&
                (currentPosition < companyStage2.offsetTop + boxesContainer.offsetTop + boxesContainer.clientHeight) ) {
                if (!boxesContainerFirstFlag) {
                    boxesTimer = setInterval(function () {
                        $(boxesArray[boxesIndexGlobal]).addClass("animated pulse").removeClass("transparent");
                        boxesIndexGlobal++;
                        if (boxesIndexGlobal == boxesArray.length) {
                            clearInterval(boxesTimer);
                        }
                    }, 200);
                    boxesContainerFirstFlag = true;
                }
            }

        }

    }

    // ************************************************************************************
    // ***************** REGISTER EVENT HANDLERS *******************

    window.addEventListener('scroll', scrollWindowHandler);
    window.addEventListener('resize', resizeWindowHandler);

    // ************************************************************************************

    // ANIMATION BLOCK
    if (!isMobileViewFlag) {
        $('.title-container .top-title').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.title-container .top-title-small').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.trees-left-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInLeft',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.flower-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated bounce',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.camp-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated zoomIn',
            classToRemove: 'transparent',
            offset: 200,
            delay: 1000
        });
        $('.rabbit-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInRight',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.trees-right-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInRight',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.header-text').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInDown',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.trees-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.two-images-container .sirok-drujba, ' +
            '.two-images-container .maslo-1, ' +
            '.two-images-container .maslo-lineyka-1').addClass("transparent").viewportChecker({
            classToAdd: 'animated bounceInLeft',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.two-images-container .sirok-smetanka, ' +
            '.two-images-container .maslo-2, ' +
            '.two-images-container .maslo-lineyka-2').addClass("transparent").viewportChecker({
            classToAdd: 'animated bounceInRight',
            classToRemove: 'transparent',
            offset: 100,
            delay: 1000
        });

        $('.splash-1-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated bounceIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.splash-2-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated bounceIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.splash-3-cont img').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.stage-header-cont .stage-header').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.company-stage-2 .pachka-cheese').addClass("transparent").viewportChecker({
            // classToAdd: 'animated zoomInRight',
            classToAdd: 'animated infinite pulse',
            classToRemove: 'transparent',
            removeClassAfterAnimation: false,
            offset: 100,
            delay: 1000
        });
// *****************
        $('.papers-cont .paper-down').addClass("transparent").viewportChecker({
            classToAdd: 'animated bounceInDown',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.papers-cont .paper-up').addClass("transparent").viewportChecker({
            classToAdd: 'animated bounceInLeft',
            classToRemove: 'transparent',
            offset: 10,
            delay: 1000
        });
        $('.animation-sirki-cont .sirok-drujba-2').addClass("transparent").viewportChecker({
            classToAdd: 'animated bounceInLeft',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.animation-sirki-cont .rabbit-pattern').addClass("transparent").viewportChecker({
            classToAdd: 'animated pulse',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.animation-sirki-cont .sirok-smetanka-2').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInRight',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.forest-pattern-cont .forest-pattern').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.maslo-korobka-old-cont .maslo-korobka-old').addClass("transparent").viewportChecker({
            classToAdd: 'animated jello',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.maslo-korobka-new-cont .maslo-korobka-new, .maslo-back-cont .maslo-back').addClass("transparent").viewportChecker({
            classToAdd: 'animated pulse',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        // different boxes
        // $('.boxes-container img').addClass("transparent").viewportChecker({
        //     classToAdd: 'animated pulse',
        //     classToRemove: 'transparent',
        //     offset: 0,
        //     delay: 10
        // });

    }


});