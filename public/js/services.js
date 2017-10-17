/**
 * Created by Glalex on 07.04.2017.
 */

'use strict';

window.addEventListener('load', function() {

    // ************************************************************************************

    var isMobileViewFlag = true,
        mobileViewWidth = 768;

    // ********************************************************************************
    resizeWindowHandler();
    // scrollWindowHandler(); // initial call!!!
    // ********************************************************************************

    // **********************  EVENT HANDLERS *************************

    function resizeWindowHandler(event) {
        if (window.innerWidth < mobileViewWidth) {
            isMobileViewFlag = true;
        } else {
            isMobileViewFlag = false;
        }
    }

    // ************************************************************************************
    // ***************** REGISTER EVENT HANDLERS *******************

    // window.addEventListener('scroll', scrollWindowHandler);
    window.addEventListener('resize', resizeWindowHandler);

    // ************************************************************************************

    // <!--PRELOADER !!!-->
    // setTimeout(function () {
    //     $('#preloader').fadeOut('slow');
    // }, 10);

    // $("#my-thumbs-list").mThumbnailScroller({
    //     axis:"x", //change to "y" for vertical scroller
    //     setLeft: "-12.5%", // initial css left property of content
    //     speed: 10,
    //     type:"hover-precise"
    // });

    if (!isMobileViewFlag) {
        $("#my-thumbs-list").mThumbnailScroller({
            axis:"x", //change to "y" for vertical scroller
            setLeft: "-12.5%", // initial css left property of content
            speed: 100,
            type:"hover-precise"
        });
    } else {
        $("#my-thumbs-list").mThumbnailScroller({
            setLeft: "0",
            type:"click-100",
            theme:"buttons-in"
        });
    }

    var visualContainers = document.querySelectorAll(".visual-wrapper .visual");
    var visualVideos = document.querySelectorAll(".visual-wrapper .visual video");

    var sliderItems = document.querySelectorAll("#my-thumbs-list .slider-item");

    if (!isMobileViewFlag) {
        var prevVideoIndex = 2;
        visualContainers[prevVideoIndex].classList.add("vis-active");

        $(sliderItems).on("mouseover", function() {
            visualContainers[prevVideoIndex].classList.remove("vis-active");
            prevVideoIndex = +this.getAttribute("data-number");
            visualContainers[prevVideoIndex].classList.add("vis-active");
            visualVideos[prevVideoIndex].play();
        });

        $(sliderItems).on("mouseleave", function() {

            // visualContainers[prevVideoIndex].classList.remove("vis-active");
            visualVideos[prevVideoIndex].pause();
        });
    }


    // visualContainers[3].classList.add("vis-active");
    // visualVideos[3].play();



});