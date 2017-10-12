/**
 * Created by Glalex on 27.04.2017.
 */

'use strict';

window.addEventListener('load', function() {

    // ************************************************************************************

    // var servicesCategories = [
    //     "all-services",
    //     "6",
    //     "5",
    //     "4",
    //     "3",
    //     "7"
    // ];

    var isMobileViewFlag = true,
        mobileViewWidth = 768,
        servicesItemsToShow = 4,
        servicesPrevCategory = servicesCategories[0];

    var servicesItems = $(".services-gallery .services-item-cont"),
        servicesItemsHoverLayers = $(".services-gallery .services-item-cont .services-item .hover-layer");

    //*************
    function generateRandomIndexes(size) {
        var arr = [], pool = [], i;

        for(i = 0; i <= size; i++) {
            arr.push(i);
        }

        for(i = 0; i <= size; i++) {
            var value =  arr.splice(Math.floor(Math.random() * ((size - i) - 1) + 1),1);
            pool.push(value.pop());
        }
        return pool;
    }

    // var tempArr = generateRandomIndexes(9);
    // console.log(tempArr);

    //**************

    function showServicesItemsHoverLayers() {
        var i = 0 ;
        // var randomIndexes = [1, 0, 2, 3, 5, 4, 8, 7, 6];
        var tempLength = servicesItemsHoverLayers.length;

        var randomIndexes = generateRandomIndexes(tempLength);

    //    *******************************
        var serviceTimer = setTimeout(
            function readyGo() {
                if (i < tempLength && tempLength) {
                    var tmp = randomIndexes[i % tempLength] - 1;
                    // console.log(i + " : " + tmp);
                    $(servicesItemsHoverLayers).removeClass("hover-layer-visible");
                    $(servicesItemsHoverLayers[randomIndexes[i % tempLength] - 1]).addClass("hover-layer-visible");
                    i++;
                    serviceTimer = setTimeout(readyGo, 1000);
                }
                else {
                    clearTimeout(serviceTimer);
                }

            },
            4
        );
    }

    // $('.services-gallery').on('appear', function(event, $all_appeared_elements) {
    //     // this element is now inside browser viewport
    //     alert("HI!!!");
    // });

    // $(document.body).on("appear", ".services-gallery", function(e, $affected) {
    //     showServicesItemsHoverLayers();
    // });
    // $(".services-gallery").appear({force_process: false});

    //
    // // ********************************************************************************
    resizeWindowHandler();
    // // scrollWindowHandler(); // initial call!!!
    // // ********************************************************************************
    //
    // // **********************  EVENT HANDLERS *************************

    function resizeWindowHandler(event) {
        if (window.innerWidth < mobileViewWidth) {
            isMobileViewFlag = true;

            servicesItemsToShow = 4;
            disableAllServicesItems();
            servicesSwitcher($(servicesItems), servicesPrevCategory, servicesItemsToShow);
        } else {
            isMobileViewFlag = false;

            servicesItemsToShow = 6;
            disableAllServicesItems();
            servicesSwitcher($(servicesItems), servicesPrevCategory, servicesItemsToShow);
        }
    }

    var sectionServices = document.querySelector(".services");
    var sectionServicesFirstFlag = true;

    function scrollWindowHandler(event) {
        var tempOffset;

        if (window.innerWidth < mobileViewWidth) {
            tempOffset = window.innerHeight / 3;
        } else {
            tempOffset = window.innerHeight / 1.4;
        }

        var currentPosition = document.body.scrollTop ?
            (document.body.scrollTop + tempOffset) :
            (document.documentElement.scrollTop + tempOffset);

        if (!isMobileViewFlag) {
            if (
                (currentPosition > (sectionServices.offsetTop)) &&
                (currentPosition < (sectionServices.offsetTop + sectionServices.clientHeight))
            ) {

                if (sectionServicesFirstFlag) {
                    sectionServicesFirstFlag = false;

                    showServicesItemsHoverLayers();
                }
            }
        }
    }


    // // ************************************************************************************
    // // ***************** REGISTER EVENT HANDLERS *******************
    //
    window.addEventListener('scroll', scrollWindowHandler);
    window.addEventListener('resize', resizeWindowHandler);
    //
    // // ************************************************************************************
    //
    <!--PRELOADER !!!-->
    // setTimeout(function () {
    //     $('#preloader').fadeOut('slow');
    // }, 10);

    // ****************************************************************************
    // *************    GENERAL ANIMATIONS FOR ALL PORTFOLIO PAGES    *************

    // $('.info-right').addClass("transparent").viewportChecker({
    //     classToAdd: 'animated fadeInRight',
    //     classToRemove: 'transparent',
    //     offset: 0,
    //     delay: 1000
    // });

    // setInterval(function () {
    //     $(".order-btns .view-work-btn").toggleClass("bounce");
    // }, 2500);

    // var $advantageItems = $(".our-advantages-gallery .advantage-item");

    $(".our-advantages-gallery .advantage-item .icon").on("mouseenter",
        function() {
            // console.log("Hello");
            // $(".our-advantages-texts .advantage-block.active").removeClass("active");

            // $(".our-advantages-texts .advantage-block")[+this.parentNode.getAttribute("data-index")].addClass("active");
            // $(".our-advantages-texts .advantage-block")[0].addClass("active");

            // var temp = document.querySelectorAll(".our-advantages-texts .advantage-block");
            // temp[+this.parentNode.getAttribute("data-index")].classList.add("active");

            if(window.innerWidth > 1000) {
                var elementToAdd = (this.parentNode.querySelector(".advantage-block")).cloneNode(true);
                $(".our-advantages-texts").empty().append(elementToAdd);
            }

        });

    // view/hide advantages-text-blocks
    $(".our-advantages-gallery .advantage-item .advantage-up-btn, " +
        ".our-advantages-gallery .advantage-item .advantage-header, " +
        ".our-advantages-gallery .advantage-item .icon").on("click",
        function() {
            if(window.innerWidth < 1000) {
                // do logic
                if ($(this).hasClass("icon")) {
                    $(this).toggleClass("change-bg");
                }
                else {
                    $(this.parentNode.parentNode.querySelector(".icon")).toggleClass("change-bg");
                }

                $(this.parentNode.querySelector(".advantage-up-btn .icon")).toggleClass("icon-rotate");
                $(this.parentNode.querySelector(".advantage-text")).slideToggle(400);
            }
        });
    // view/hide advantages-text-blocks on icon-click
    // $(".our-advantages-gallery .advantage-item .icon").on("click",
    //     function() {
    //         if(window.innerWidth < 1000) {
    //             // do logic
    //             $(this).toggleClass("change-bg");
    //             $(this.parentNode.querySelector(".advantage-up-btn .icon")).toggleClass("icon-rotate");
    //             $(this.parentNode.querySelector(".advantage-text")).slideToggle(400);
    //         }
    //     });

    // function:: toggle items due to active category
    function servicesSwitcher(inputArray, conditionStr, itemsToShow) {
        var cnt = 0;
        switch (conditionStr) {
            case servicesCategories[0]:
                inputArray.each(function (index, elem) {
                    if (cnt < itemsToShow) {
                        $(elem).addClass("visible");
                    }
                    cnt++;
                });
                break;
            case servicesCategories[1]:
                inputArray.each(function (index, elem) {
                    if (elem.getAttribute("data-category") == servicesCategories[1]) {
                        if (cnt < itemsToShow) {
                            $(elem).addClass("visible");
                        }
                        cnt++;
                    }
                });
                break;
            case servicesCategories[2]:
                inputArray.each(function (index, elem) {
                    if (elem.getAttribute("data-category") == servicesCategories[2]) {
                        if (cnt < itemsToShow) {
                            $(elem).addClass("visible");
                        }
                        cnt++;
                    }
                });
                break;
            case servicesCategories[3]:
                inputArray.each(function (index, elem) {
                    if (elem.getAttribute("data-category") == servicesCategories[3]) {
                        if (cnt < itemsToShow) {
                            $(elem).addClass("visible");
                        }
                        cnt++;
                    }
                });
                break;
            case servicesCategories[4]:
                inputArray.each(function (index, elem) {
                    if (elem.getAttribute("data-category") == servicesCategories[4]) {
                        if (cnt < itemsToShow) {
                            $(elem).addClass("visible");
                        }
                        cnt++;
                    }
                });
                break;
            case servicesCategories[5]:
                inputArray.each(function (index, elem) {
                    if (elem.getAttribute("data-category") == servicesCategories[5]) {
                        if (cnt < itemsToShow) {
                            $(elem).addClass("visible");
                        }
                        cnt++;
                    }
                });
                break;
            default:
                inputArray.each(function (index, elem) {
                    if (cnt < itemsToShow) {
                        $(elem).addClass("visible");
                    }
                    cnt++;
                });
                break;
        }
    }

    // servicesSwitcher($(servicesItems), servicesPrevCategory, servicesItemsToShow); //initial call

    function disableAllServicesItems() {
        $(servicesItems).each(function (index, elem) {
            if ($(elem).hasClass("visible")) {
                $(elem).removeClass("visible");
            }
        });
    }

    $(".services .services-menu ul li a").on("click", function(event) {
        event.preventDefault();

        if (!this.parentNode.classList.contains("active")) {
            var prevActiveItem = $(".services .services-menu ul li.active");

            prevActiveItem.removeClass("active");
            this.parentNode.classList.add("active");

            // disable all first, then will turn on
            disableAllServicesItems();

            // now determine what to turn on
            servicesSwitcher($(servicesItems), this.getAttribute("data-category"), servicesItemsToShow);
            // save the current state
            servicesPrevCategory = this.getAttribute("data-category");
        }
    });

    setInterval(function () {
        $(".call-back-form .icon-phone_tube").toggleClass("tada");
    }, 2000);

//    *****************
    function readMoreBtnHandler() {
        $(this.parentNode.querySelector(".for-read-more")).slideToggle();
        $(this).toggleText("Больше", "Скрыть");
    }

    $(".read-more-btn").on("click", readMoreBtnHandler);

});

$(document).ready(function(){
    <!-- bxSlider -->
    $('.bxslider').bxSlider({
        mode: 'fade',
        auto: true,
        pause: 5000, // The amount of time (in ms) between each auto transition
        speed: 1000, // Slide transition duration (in ms)
        pager: false,
        controls: false,
        stopAutoOnClick: false,

        onSlideBefore: function () {
            $(".order-btns .view-work-btn").addClass("bounce");
        }
    });
});