/**
 * Created by Glalex on 26.05.2017.
 */

'use strict';

window.addEventListener('load', function() {

    var busyFlag = false,
        mobileViewWidth = 768,

        pageFirstLoadingFlag = true,
        isMobileViewFlag = true;

    var upBlock = $('.up-block-imgs')[0];
    var downBlock = $('.down-block-imgs')[0];
    var upBlockImgs = $('.up-block-imgs .picture-ca').addClass("transparent");
    var downBlockImgs = $('.down-block-imgs .picture-ca').addClass("transparent");

    var upBlockIndexGlobal = 0,
        downBlockIndexGlobal = 0,
        upBlockTimer,
        downBlockTimer,
        upBlockFirstFlag = false,
        downBlockFirstFlag = false;

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
            $(upBlockImgs).removeClass("transparent");
            $(downBlockImgs).removeClass("transparent");
        } else {
            isMobileViewFlag = false;
        }
    }


    function scrollWindowHandler(event) {
        var	tempOffset;

        if (window.innerWidth < mobileViewWidth) {
            tempOffset = window.innerHeight / 3;
        } else {
            tempOffset = window.innerHeight / 1.4;
        }

        var	currentPosition = document.body.scrollTop ?
            (document.body.scrollTop + tempOffset) :
            (document.documentElement.scrollTop + tempOffset);

        if (!isMobileViewFlag) {

            if ( (currentPosition > upBlock.offsetTop) &&
                (currentPosition < upBlock.offsetTop + upBlock.clientHeight) ) {
                if (!upBlockFirstFlag) {
                    upBlockTimer = setInterval(function () {
                        $(upBlockImgs[upBlockIndexGlobal]).addClass("animated fadeIn").removeClass("transparent");
                        upBlockIndexGlobal++;
                        if (upBlockIndexGlobal == upBlockImgs.length) {
                            clearInterval(upBlockTimer);
                        }
                    }, 300);
                    upBlockFirstFlag = true;
                }
            }
            if ( (currentPosition > downBlock.offsetTop) &&
                (currentPosition < downBlock.offsetTop + downBlock.clientHeight) ) {
                if (!downBlockFirstFlag) {
                    downBlockTimer = setInterval(function () {
                        $(downBlockImgs[downBlockIndexGlobal]).addClass("animated fadeIn").removeClass("transparent");
                        downBlockIndexGlobal++;
                        if (downBlockIndexGlobal == downBlockImgs.length) {
                            clearInterval(downBlockTimer);
                        }
                    }, 300);
                    downBlockFirstFlag = true;
                }
            }

        }
    }
    // ************************************************************************************


    // ************************************************************************************
    // ***************** REGISTER EVENT HANDLERS *******************
    window.addEventListener('resize', resizeWindowHandler);
    window.addEventListener('scroll', scrollWindowHandler);
    // ************************************************************************************

    var logoAnimationState = 0;

    var logoAnimationImg = document.querySelector(".logo-animation-cont .logo-img");

    setInterval(function () {

        switch(logoAnimationState) {
            case 0:
                logoAnimationImg.src = "../../images/portfolio/lanshmit/logo-1.png";
                logoAnimationState++;
                break;
            case 1:
                logoAnimationImg.src = "../../images/portfolio/lanshmit/logo-2.png";
                logoAnimationState++;
                break;
            case 2:
                logoAnimationImg.src = "../../images/portfolio/lanshmit/logo-3.png";
                logoAnimationState++;
                break;
            case 3:
                logoAnimationImg.src = "../../images/portfolio/lanshmit/logo-4.png";
                logoAnimationState = 0;
                break;

            default:
                logoAnimationState = 0;
                break;
        }

    }, 2000);

    // ANIMATION BLOCK
    if (!isMobileViewFlag) {
        $('.title-container').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.graphity-image .picture-paper').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInLeft',
            classToRemove: 'transparent',
            offset: 100,
            delay: 1000
        });
        $('.graphity-image .pencil').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeInRight',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.logo-animation-cont').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });

        $('.bg-container .logo-4').addClass("transparent").viewportChecker({
            classToAdd: 'animated fadeIn',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });


        $('.sausages-img-cont .image-left').addClass("transparent").viewportChecker({
            classToAdd: 'animated pulse',
            classToRemove: 'transparent',
            offset: 0,
            delay: 1000
        });
        $('.sausages-img-cont .image-right').addClass("transparent").viewportChecker({
            classToAdd: 'animated pulse',
            classToRemove: 'transparent',
            offset: 100,
            delay: 1000
        });
    }
});