/**
 * Created by Glalex on 01.02.2017.
 */
'use strict';

window.addEventListener('load', function() {

	// ******************** GLOBAL VARIABLES ****************************
	var scrollFuncTimer,
		busyFlag = false,
		mobileViewWidth = 768,

		pageFirstLoadingFlag = true,
        isMobileViewFlag = true,

		SYMBOL_TYPING_SPEED_MS = 5;

	var sectionHeader = document.getElementById("header"),
		sectionPortfolio = document.getElementById("indelika"),
		subSectionCompanyAims = document.querySelector(".company-aims");

	var topImage = document.querySelector(".image-top");

	// --------------------------- MAIN CODE --------------------------------------

    resizeWindowHandler();
    scrollWindowHandler(); // initial call!!!

	// ************************* FUNCTIONS ***************************

	function scrollFunc(startPos, stopPos, step) {
		var epsilon = 0.1,
			step_ms = 10,
			deltaScroll = (stopPos - startPos) / step;

		if (Math.abs(deltaScroll) > epsilon) {
			scrollFuncTimer = setInterval(
				function () {
					// document.body.scrollTop
					if (deltaScroll == 0 ||
						(deltaScroll > 0 && pageYOffset >= stopPos) ||
						(deltaScroll < 0 && pageYOffset <= stopPos)) {
						clearInterval(scrollFuncTimer);
						busyFlag = false;
					} else {
						scrollBy(0, deltaScroll);
					}
				},
				step_ms
			);
		}
		else {
			busyFlag = false;
		}
	}

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

	// ****************************************************************

	// **********************  EVENT HANDLERS *************************

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

        // if (!isMobileViewFlag) {
        //     if ( ((currentPosition) >= sectionPortfolio.offsetTop) &&
        //         ((currentPosition) < sectionPortfolio.offsetTop + topImage.clientHeight)
        //     ) {
        //         if (topImageFirstTypingFlag) {
        //             topImage.classList.add("image-animate-active");
        //             topTitle.classList.add("top-title-animate-active");
        //
        //             topImageFirstTypingFlag = false;
        //         }
        //     } else if ( (currentPosition > (infoHistory.offsetTop - tempOffset)) &&
        //         (currentPosition < (infoHistory.offsetTop + infoHistory.clientHeight)) ) {
        //         if (infoHistoryFirstTypingFlag) {
        //             infoHistory.querySelector("h2").classList.add("info-title-animate-active");
        //             infoHistory.querySelector("p").classList.add("info-text-animate-active");
        //             textTyping(infoHistory.querySelector("p"), infoHistory.querySelector(".read-more-btn"), SYMBOL_TYPING_SPEED_MS);
        //
        //             infoHistoryFirstTypingFlag = false;
        //         }
        //     } else if ((currentPosition > (infoAim.offsetTop - tempOffset)) &&
        //         (currentPosition < (infoAim.offsetTop + infoAim.clientHeight)) ) {
        //         if (infoAimFirstTypingFlag) {
        //             infoAim.querySelector("h2").classList.add("info-title-animate-active");
        //             infoAim.querySelector("p").classList.add("info-text-animate-active");
        //             textTyping(infoAim.querySelector("p"), infoAim.querySelector(".read-more-btn"), SYMBOL_TYPING_SPEED_MS);
        //
        //             infoAimFirstTypingFlag = false;
        //         }
        //     } else if ((currentPosition > (infoSolution.offsetTop - tempOffset)) &&
        //         (currentPosition < (infoSolution.offsetTop + infoSolution.clientHeight)) ) {
        //         if (infoSolutionFirstTypingFlag) {
        //             infoSolution.querySelector("h2").classList.add("info-title-animate-active");
        //             infoSolution.querySelector("p").classList.add("info-text-animate-active");
        //             textTyping(infoSolution.querySelector("p"), infoSolution.querySelector(".read-more-btn"), SYMBOL_TYPING_SPEED_MS);
        //
        //             infoSolutionFirstTypingFlag = false;
        //         }
        //     } else if ((currentPosition > (secondImage.parentNode.offsetTop - tempOffset)) &&
        //         (currentPosition < (secondImage.parentNode.offsetTop + secondImage.parentNode.clientHeight)) ) {
        //         if (secondImageFirstScrollFlag) {
        //             secondImage.classList.add("image-animate-active");
        //
        //             secondImageFirstScrollFlag = false;
        //         }
        //     } else if ((currentPosition > (thirdImageBlock.parentNode.offsetTop - tempOffset)) &&
        //         (currentPosition < (thirdImageBlock.parentNode.offsetTop + thirdImageBlock.parentNode.clientHeight)) ) {
        //         if (thirdImageFirstScrollFlag) {
        //             thirdImageLeft.classList.add("image-animate-active");
        //             thirdImageRight.classList.add("image-animate-active");
        //
        //             thirdImageFirstScrollFlag = false;
        //         }
        //     } else if ((currentPosition > (conceptsInfo.offsetTop - tempOffset)) &&
        //         (currentPosition < (conceptsInfo.offsetTop + conceptsInfo.clientHeight)) ) {
        //         if (conceptsInfoFirstTypingFlag) {
        //             conceptsInfo.querySelector("h2").classList.add("concepts-info-title-animate-active");
        //             conceptsInfo.querySelector("p").classList.add("concepts-info-text-animate-active");
        //             textTyping(conceptsInfo.querySelector("p", null, SYMBOL_TYPING_SPEED_MS));
        //
        //             conceptsInfoFirstTypingFlag = false;
        //         }
        //     } else if ((currentPosition > (infoAverage.offsetTop - tempOffset)) &&
        //         (currentPosition < (infoAverage.offsetTop + infoAverage.clientHeight)) ) {
        //         if (infoAverageFirstTypingFlag) {
        //             infoAverage.querySelector("h2").classList.add("info-title-animate-active");
        //             infoAverage.querySelector("p").classList.add("info-text-animate-active");
        //             textTyping(infoAverage.querySelector("p"), infoAverage.querySelector(".read-more-btn"), SYMBOL_TYPING_SPEED_MS);
        //
        //             infoAverageFirstTypingFlag = false;
        //         }
        //     } else if ((currentPosition > (fourthImage.parentNode.offsetTop - tempOffset)) &&
        //         (currentPosition < (fourthImage.parentNode.offsetTop + fourthImage.parentNode.clientHeight)) ) {
        //         if (fourthImageFirstScrollFlag) {
        //             fourthImage.classList.add("image-animate-active");
        //
        //             fourthImageFirstScrollFlag = false;
        //         }
        //     } else if ((currentPosition > (summaryHeader.parentNode.offsetTop - tempOffset)) &&
        //         (currentPosition < (summaryHeader.parentNode.offsetTop + summaryHeader.parentNode.clientHeight)) ) {
        //         if (summaryHeaderFirstTypingFlag) {
        //             summaryHeader.classList.add("summary-header-animate-active");
        //             textTyping(summaryHeader, null, 50);
        //
        //             summaryHeaderFirstTypingFlag = false;
        //         }
        //     } else if ((currentPosition > (infoResult.offsetTop - tempOffset)) &&
        //         (currentPosition < (infoResult.offsetTop + infoResult.clientHeight)) ) {
        //         if (infoResultFirstTypingFlag) {
        //             infoResult.querySelector("h2").classList.add("info-title-animate-active");
        //             infoResult.querySelector("p").classList.add("info-text-animate-active");
        //             textTyping(infoResult.querySelector("p"), infoResult.querySelector(".read-more-btn"), SYMBOL_TYPING_SPEED_MS);
        //
        //             infoResultFirstTypingFlag = false;
        //         }
        //     } else if ((currentPosition > (contactUsForm.offsetTop - tempOffset)) &&
        //         (currentPosition < (contactUsForm.offsetTop + contactUsForm.clientHeight)) ) {
        //         if (contactUsFormFirstTypingFlag) {
        //             contactUsForm.querySelector("h1").classList.add("contact-us-header-animate-active");
        //             textTyping(contactUsForm.querySelector("h1"), null, SYMBOL_TYPING_SPEED_MS);
        //             contactUsForm.querySelector("p").classList.add("contact-us-content-animate-active");
        //             contactUsForm.querySelector("button").classList.add("submit-btn-animate-active");
        //
        //             contactUsFormFirstTypingFlag = false;
        //         }
        //     }
        // }

	}

	// ************************************************************************************

	// ***************** REGISTER EVENT HANDLERS *******************

    window.addEventListener('scroll', scrollWindowHandler);
    window.addEventListener('resize', resizeWindowHandler);

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        items:1,
        nav:true,

        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:10000, //Время смены слайда
        autoplayHoverPause:false,

        responsive:{
            0:{
                autoplay:false
            },
            800:{
                autoplay:false
            }
        }

    });

    $(".owl-carousel .owl-prev").text("");
    $(".owl-carousel .owl-next").text("");

});
