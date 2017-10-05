/**
 * Created by Glalex on 10.02.2017.
 */
'use strict';

window.addEventListener('load', function() {

	// ******************** GLOBAL VARIABLES ****************************

	var	busyFlag = false,
		mobileViewWidth = 768,

		pageFirstLoadingFlag = true,
        isMobileViewFlag = true;


	// --------------------------- MAIN CODE --------------------------------------

    scrollWindowHandler(); // initial call!!!

    // // ************************* FUNCTIONS ***************************

    function myFadeIn(elementDOM, timeStep) {
		var tempOpacity = 0;
		var localTimer = setInterval(
			function () {
				tempOpacity += 1;
				if (tempOpacity <= 100) {
					elementDOM.style.opacity = String(tempOpacity / 100);
				} else {
					clearInterval(localTimer);
				}
			},
			timeStep
		);
    }

    function myFadeOut(elementDOM, timeStep) {
		var tempOpacity = 100;
		var localTimer = setInterval(
			function () {
				tempOpacity -= 1;
				if (tempOpacity >= 0) {
					elementDOM.style.opacity = String(tempOpacity / 100);
				} else {
					clearInterval(localTimer);
					elementDOM.style.display = "none";
				}
			},
			timeStep
		);
    }

    function textTyping(textElement, buttonElement, speedTyping) {
		var tempTextStr = textElement.innerText,
			tempStr = "",
			i = 0;

		textElement.style.height = getComputedStyle(textElement).height;

		var textTypingTimer = setInterval(
			function () {
				tempStr += tempTextStr[i];
				textElement.innerText = tempStr;
				i++;
				if (i == tempTextStr.length) {
					clearInterval(textTypingTimer);
					if (buttonElement) {
						buttonElement.classList.add("info-text-animate-active");
					}
				}
			}, speedTyping);
    }

    // // ****************************************************************
    // // **********************  EVENT HANDLERS *************************

    function resizeWindowHandler(event) {
        if (window.innerWidth < mobileViewWidth) {
            isMobileViewFlag = true;
        } else {
            isMobileViewFlag = false;
        }
    }

	function scrollWindowHandler(event) {
		var	tempOffset;

		if (window.innerWidth < mobileViewWidth) {
			tempOffset = window.innerHeight / 3;
		} else {
			tempOffset = window.innerHeight / 2;
		}

		var	currentPosition = document.body.scrollTop ?
			(document.body.scrollTop + tempOffset) :
			(document.documentElement.scrollTop + tempOffset);

        if (!isMobileViewFlag) {

		}
	}

	// ************************************************************************************

	// ***************** REGISTER EVENT HANDLERS *******************

    window.addEventListener('scroll', scrollWindowHandler);
    window.addEventListener('resize', resizeWindowHandler);

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,

        autoplay:true,
        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:4000, //Время смены слайда
        autoplayHoverPause:false,

        responsive:{
            0:{
                items:1
            },
            800:{
                items:2
            },
            1200:{
                items:4
            }
        }
    });

});
