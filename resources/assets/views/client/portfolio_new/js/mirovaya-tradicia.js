/**
 * Created by Glalex on 08.02.2017.
 */
'use strict';

window.addEventListener('load', function() {

    // // ******************** GLOBAL VARIABLES ****************************
    var SCROLL_STEP = 100,
		scrollFuncTimer,
        scrollPreviousPosition = 0,
        sliderScrollCounter = 0,
		busyFlag = false,
		mobileViewWidth = 768,

		pageFirstLoadingFlag = true,
        isMobileViewFlag = true,
		topImageFirstTypingFlag = true,

		infoHistoryFirstTypingFlag = true,
        planeContainerFirstTypingFlag = true,
		infoAimFirstTypingFlag = true,
        executionHeaderFirstTypingFlag = true,
        infoAnalysisFirstTypingFlag = true,
        summaryHeaderFirstTypingFlag = true,
        bottles2FirstTypingFlag = true,
        conceptsInfoFirstTypingFlag = true,
        infoLegendFirstTypingFlag = true,
        infoResultFirstTypingFlag = true,
        infoCvFirstTypingFlag = true,
		contactUsFormFirstTypingFlag = true,
        getResultContainerFirstTypingFlag = true,

		SYMBOL_TYPING_SPEED_MS = 50;

    var backToTopBtn = document.querySelector(".back-to-top"),
        searchBtn =  document.querySelector(".search-btn"),
		sectionHeader = document.getElementById("header"),
		sectionPortfolio = document.getElementById("mirovaya-tradicia");

    var topContainer = document.querySelector(".top-container"),
        logoContainer2 = document.querySelector(".logo-container-2"),
        planeContainer = document.querySelector(".plane-container"),

		topTitle = document.querySelector(".top-title"),
        logoImage = document.querySelector(".logo-image"),
        ballonRight = document.querySelector(".ballon-right"),

        cloudN1 = document.querySelector(".cloud-N1"),
        cloudN2 = document.querySelector(".cloud-N2"),
        cloudN3 = document.querySelector(".cloud-N3"),
        cloudN4 = document.querySelector(".cloud-N4"),
        cloudN5 = document.querySelector(".cloud-N5"),

        cloudBack1 = document.querySelector(".cloud-back-1"),
        cloudBack2 = document.querySelector(".cloud-back-2"),
        cloudBack3 = document.querySelector(".cloud-back-3"),

        plane = document.querySelector(".plane"),

        birds = document.querySelector(".birds"),
        ballonSmall = document.querySelector(".ballon-small"),

        companyAims = document.querySelector(".company-aims"),
        companyAims2 = document.querySelector(".company-aims-2"),
        companyAims3 = document.querySelector(".company-aims-3"),

        parallaxContainer = document.querySelector(".parallax-container");

    var infoHistory = document.querySelector(".info-history"),
		infoAim = document.querySelector(".info-aim"),
        executionHeader = document.querySelector(".execution-header"),
        infoAnalysis = document.querySelector(".info-analysis"),
        summaryHeader = document.querySelector(".summary-header"),
        owlSlider = document.querySelector(".owl-carousel"),
        bottles2 = document.querySelector(".bottles-2"),
        conceptsInfo = document.querySelector(".concepts-info"),
		infoLegend = document.querySelector(".info-legend"),
		infoResult = document.querySelector(".info-result"),
        infoCv = document.querySelector(".info-cv"),
		contactUsForm = document.querySelector(".contact-us-form"),
        getResultContainer = document.querySelector(".get-result-container");

    var previousCoordinates = {"clientX": 0, "clientY": 0};


    // // --------------------------- MAIN CODE --------------------------------------
    //
    function animatesTurnOn() {
        planeContainer.querySelector(".plane").classList.add("transparent");

        executionHeader.classList.add("transparent");

        summaryHeader.querySelector("h2").classList.add("transparent");
        bottles2.classList.add("transparent");
        conceptsInfo.querySelector("h2").classList.add("transparent");
    }

    // function animatesTurnOff() {
    //     topImage.classList.remove("top-image-animate");
    //
    // }
    //

    if (pageFirstLoadingFlag) {
        if (window.innerWidth > mobileViewWidth) {
            animatesTurnOn();

            isMobileViewFlag = false;
        } else {
            isMobileViewFlag = true;
        }
    }

    resizeWindowHandler();
    scrollWindowHandler(); // initial call!!!

    // // ************************* FUNCTIONS ***************************
    //

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
    //
    // // **********************  EVENT HANDLERS *************************

    function topContainerHandler(event) {
        // console.log("here");

        var temp = getComputedStyle(ballonRight);
        // ballonRight.style.left = event.clientX + "px";
        // ballonRight.style.top = event.clientY + "px";
        ballonRight.style.left = parseInt(temp.left) + (previousCoordinates.clientX - event.clientX) + "px";
        ballonRight.style.top = parseInt(temp.top) + (previousCoordinates.clientY - event.clientY) + "px";

        previousCoordinates.clientX = event.clientX;
        previousCoordinates.clientY = event.clientY;
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

        if (!isMobileViewFlag) {
            if ( (currentPosition > (companyAims.offsetTop + infoHistory.offsetTop)) &&
                (currentPosition < (companyAims.offsetTop + infoHistory.offsetTop + infoHistory.clientHeight)) ) {

            } else if ( (currentPosition > (companyAims.offsetTop + planeContainer.offsetTop)) &&
                (currentPosition < (companyAims.offsetTop + planeContainer.offsetTop + planeContainer.clientHeight)) ) {

                if (planeContainerFirstTypingFlag) {
                    planeContainerFirstTypingFlag = false;

                    $(".plane-container .plane").removeClass('transparent').addClass('plane-animate');
                }
            } else if ( (currentPosition > (companyAims.offsetTop + executionHeader.offsetTop)) &&
                (currentPosition < (companyAims.offsetTop + executionHeader.offsetTop + executionHeader.clientHeight)) ) {

                if (executionHeaderFirstTypingFlag) {
                    executionHeaderFirstTypingFlag = false;

                    $(executionHeader).removeClass('transparent').addClass('animated fadeIn');
                }
            } else if ( (currentPosition > (summaryHeader.offsetTop)) &&
                (currentPosition < (summaryHeader.offsetTop + summaryHeader.clientHeight)) ) {

                if (summaryHeaderFirstTypingFlag) {
                    summaryHeaderFirstTypingFlag = false;

                    $(".summary-header h2").removeClass('transparent').addClass('animated fadeIn');
                    textTyping(summaryHeader.querySelector("h2"), null, SYMBOL_TYPING_SPEED_MS);
                    // $(".summary-header h2").removeClass('transparent');
                }
            } else if ( (currentPosition > (bottles2.offsetTop)) &&
                (currentPosition < (bottles2.offsetTop + bottles2.clientHeight)) ) {

                if (bottles2FirstTypingFlag) {
                    bottles2FirstTypingFlag = false;

                    $(bottles2).removeClass('transparent').addClass('animated fadeIn');
                }
            } else if ( (currentPosition > (conceptsInfo.offsetTop)) &&
                (currentPosition < (conceptsInfo.offsetTop + conceptsInfo.clientHeight)) ) {

                if (conceptsInfoFirstTypingFlag) {
                    conceptsInfoFirstTypingFlag = false;

                    // textTyping(conceptsInfo.querySelector("h2"), null, SYMBOL_TYPING_SPEED_MS);
                    // $(".concepts-info h2").removeClass('transparent');

                    $(".concepts-info h2").removeClass('transparent').addClass('animated fadeIn');
                }
            }
        }

        // images (clouds, ballons, plane) animations
        if (!isMobileViewFlag) {
            var tempStyle, tempStyle2, tempStyle3;

            if ( ((currentPosition) >= sectionPortfolio.offsetTop) &&
                ((currentPosition - tempOffset) < companyAims.offsetTop)
            ) {
                tempStyle = getComputedStyle(logoImage);
                tempStyle2 = getComputedStyle(ballonRight);

                if (currentPosition < scrollPreviousPosition) {
                    // move up
                    logoImage.style.top = parseInt(tempStyle.top) - window.innerHeight / 50 + 'px';
                    ballonRight.style.right = parseInt(tempStyle2.right) - window.innerWidth / 100 + 'px';
                } else {
                    // move down
                    logoImage.style.top = parseInt(tempStyle.top) + window.innerHeight / 50 + 'px';
                    ballonRight.style.right = parseInt(tempStyle2.right) + window.innerWidth / 100 + 'px';
                }

            }
            if ( ((currentPosition) >= sectionPortfolio.offsetTop) &&
                ((currentPosition) < companyAims.offsetTop + infoAim.offsetTop)
            ) {
                tempStyle = getComputedStyle(cloudN1);

                if (currentPosition < scrollPreviousPosition) {
                    // move up
                    cloudN1.style.left = parseInt(tempStyle.left) - window.innerWidth / 50 + 'px';
                } else {
                    // move down
                    cloudN1.style.left = parseInt(tempStyle.left) + window.innerWidth / 50 + 'px';
                }
            }
            if ( ((currentPosition) >= companyAims.offsetTop + infoAim.offsetTop) &&
                ((currentPosition) < companyAims.offsetTop + infoAnalysis.offsetTop + infoAnalysis.clientHeight)
            ) {
                tempStyle = getComputedStyle(cloudN2);

                if (currentPosition < scrollPreviousPosition) {
                    // move up
                    cloudN2.style.right = parseInt(tempStyle.right) - window.innerWidth / 100 + 'px';
                } else {
                    // move down
                    cloudN2.style.right = parseInt(tempStyle.right) + window.innerWidth / 100 + 'px';
                }
            }
            if ( ((currentPosition) >= companyAims2.offsetTop ) &&
                ((currentPosition) < companyAims2.offsetTop + companyAims2.clientHeight )
            ) {
                tempStyle = getComputedStyle(cloudN3);

                if (currentPosition < scrollPreviousPosition) {
                    // move up
                    cloudN3.style.left = parseInt(tempStyle.left) - window.innerWidth / 100 + 'px';
                } else {
                    // move down
                    cloudN3.style.left = parseInt(tempStyle.left) + window.innerWidth / 100 + 'px';
                }
            }
            if ( ((currentPosition) >= companyAims3.offsetTop + parallaxContainer.offsetTop) &&
                ((currentPosition) < companyAims3.offsetTop + parallaxContainer.offsetTop + 2 * parallaxContainer.clientHeight)
            ) {
                tempStyle2 = getComputedStyle(ballonSmall);
                tempStyle3 = getComputedStyle(cloudN4);

                if (currentPosition < scrollPreviousPosition) {
                    // move up
                    ballonSmall.style.left = parseInt(tempStyle2.left) - window.innerWidth / 20 + 'px';
                    cloudN4.style.right = parseInt(tempStyle3.right) - window.innerWidth / 100 + 'px';
                } else {
                    // move down
                    ballonSmall.style.left = parseInt(tempStyle2.left) + window.innerWidth / 20 + 'px';
                    cloudN4.style.right = parseInt(tempStyle3.right) + window.innerWidth / 100 + 'px';
                }
            }
            if ( ((currentPosition) >= companyAims3.offsetTop + infoResult.offsetTop) &&
                ((currentPosition) < contactUsForm.offsetTop + contactUsForm.clientHeight)
            ) {
                tempStyle = getComputedStyle(cloudN5);

                if (currentPosition < scrollPreviousPosition) {
                    // move up
                    cloudN5.style.left = parseInt(tempStyle.left) - window.innerWidth / 100 + 'px';
                } else {
                    // move down
                    cloudN5.style.left = parseInt(tempStyle.left) + window.innerWidth / 100 + 'px';
                }
            }
        }

        scrollPreviousPosition = currentPosition;

    }

    // ************************************************************************************

    // ***************** REGISTER EVENT HANDLERS *******************

    window.addEventListener('scroll', scrollWindowHandler);
    window.addEventListener('resize', resizeWindowHandler);

    // ************************************************************************************

	setInterval(function () {
	    var tempStyle = getComputedStyle(plane);
        if (parseInt(tempStyle.left) < -plane.clientWidth + 10) {
            // move from left to right
            plane.src = "images/mirovaya-tradiciya/plane.png";
        } else if (parseInt(tempStyle.left) > window.innerWidth - 50) {
            // move from right to left
            plane.src = "images/mirovaya-tradiciya/plane-mirror.png";
        }
    }, 5);

    setInterval(function () {
        var tempStyle = getComputedStyle(birds);
        if (parseInt(tempStyle.left) < -birds.clientWidth + 10) {
            // move from left to right
            birds.src = "images/mirovaya-tradiciya/birds.png";
        } else if (parseInt(tempStyle.left) > window.innerWidth - 50) {
            // move from right to left
            birds.src = "images/mirovaya-tradiciya/birds-mirror.png";
        }
    }, 5);


    $(owlSlider).owlCarousel({
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
                autoplay:true
            }
        }
    });

    function sliderMousewheelHandler(event) {

        var	currentPosition = document.body.scrollTop ?
            (document.body.scrollTop) :
            (document.documentElement.scrollTop);

        if ( (currentPosition > owlSlider.offsetTop) &&
            (currentPosition < owlSlider.offsetTop + window.innerHeight / 10) ) {

            if (sliderScrollCounter != 3 ) {
                sliderScrollCounter++;
                $(owlSlider).trigger('next.owl.carousel');

                event.preventDefault();
            }
            else {
                $(owlSlider).off('mousewheel', sliderMousewheelHandler);
            }
        }
    }

    $(owlSlider).on('mousewheel', sliderMousewheelHandler);


    $(".owl-carousel .owl-prev").text("");
    $(".owl-carousel .owl-next").text("");

});
