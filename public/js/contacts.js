/**
 * Created by Glalex on 14.04.2017.
 */

'use strict';

// determine users coordinates - start *************************************************
var userCurrentPos;
var isGeolocationActive = false;
var geoOptions = {
    timeout: 10 * 1000
};

var geoSuccess = function(position) {
    // userCurrentPos = position;
    // console.log(userCurrentPos);
    isGeolocationActive = true;
    userCurrentPos = {lat: position.coords.latitude, lng: position.coords.longitude};

};
var geoError = function(error) {
    console.log('Error occurred. Error code: ' + error.code);
    isGeolocationActive = false;
    // error.code can be:
    //   0: unknown error
    //   1: permission denied
    //   2: position unavailable (error response from location provider)
    //   3: timed out
};

navigator.geolocation.getCurrentPosition(geoSuccess, geoError, geoOptions);
// determine users coordinates - end ***************************************************

var kievMap;
var moscowMap;

var myLatLngKiev = {lat: 50.453122, lng: 30.525794};
var myLatLngMoscow = {lat: 55.752873, lng: 37.599039};

function initMap() {

    var kievMapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 15,

        // The latitude and longitude to center the map (always required)
        center: myLatLngKiev, // Трехсвятительская 5

        // How you would like to style the map.
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"stylers": [{"hue": "#ff1a00"}, {"invert_lightness": true}, {"saturation": -100}, {"lightness": 33}, {"gamma": 0.5}]}, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{"color": "#2D333C"}]
        }]
    };

    var moscowMapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 15,

        // The latitude and longitude to center the map (always required)
        center: myLatLngMoscow, // Новый Арбат

        // How you would like to style the map.
        // This is where you would paste any style found on Snazzy Maps.
        styles: [{"stylers": [{"hue": "#ff1a00"}, {"invert_lightness": true}, {"saturation": -100}, {"lightness": 33}, {"gamma": 0.5}]}, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{"color": "#2D333C"}]
        }]
    };

    kievMap = new google.maps.Map(document.getElementById('kiev-map'), kievMapOptions);

    var kievMarker = new google.maps.Marker({
        position: myLatLngKiev,
        map: kievMap,
        title: "KOLORO in Kiev"
    });
    kievMarker.setMap(kievMap);

    moscowMap = new google.maps.Map(document.getElementById('moscow-map'), moscowMapOptions);

    var moscowMarker = new google.maps.Marker({
        position: myLatLngMoscow,
        map: moscowMap,
        title: "KOLORO in Moscow"
    });
    moscowMarker.setMap(moscowMap);
}

//  routings starts ******************************************************
var directionsDisplay = new google.maps.DirectionsRenderer();
var directionsService = new google.maps.DirectionsService();
//    directionsDisplay.setMap(kievMap);

function calcRoute(start, end) {
    var request = {
        origin: start,
        destination: end,
        travelMode: 'DRIVING'
    };
    directionsService.route(request, function(result, status) {
        if (status == 'OK') {
            directionsDisplay.setDirections(result);
        }
    });
}
// routings ends ************************************************************


window.addEventListener('load', function() {

    // $('.nav-tabs a').click(function (e) {
    //     e.preventDefault();
    //     $(this).tab('show');
    //     initMap();
    // });
    // $(".mobile_tab").on("click", function () {
    //     $("li").removeClass("active");
    // });

    var koloroMaps = $('.maps-container .koloro-map');
    var contactsMenuItems = $('.contacts-menu li');
    var tabPanel = $('.tab-panel');
    var tabPanes = $('.tab-panel .tab-pane');
    var closeContactsBtns = $('.fly-block .close-contacts-btn');

    $(contactsMenuItems).click(function (e) {
        e.preventDefault();

        if (!$(this).hasClass("active")) {
            $(contactsMenuItems).removeClass("active");
            $(this).addClass("active");

            $(koloroMaps).toggleClass("active");
            $(tabPanes).toggleClass("active");

            $(tabPanel).slideDown();
            $(closeContactsBtns).children().addClass("icon-cross-yellow");
            $(closeContactsBtns).children().removeClass("icon-arrow-down-yellow");

            initMap();
        } else {
            $(tabPanel).slideDown();
            $(closeContactsBtns).children().addClass("icon-cross-yellow");
            $(closeContactsBtns).children().removeClass("icon-arrow-down-yellow");
        }

    });

    // contacts on map logic starts
    $(closeContactsBtns).click(function() {
        $(tabPanel).slideToggle();
        $(this).children().toggleClass("icon-cross-yellow icon-arrow-down-yellow");
    });
    // contacts on map logic ends

    // start of turn on\off map zoom
    $(".maska").on("click", function (e) {
        e.stopPropagation();
        $(".maska").css("z-index", "-1");
    });
    $("div:not('#YMapsID')").on("click", function (e) {
        e.stopPropagation();
        $(".maska").css("z-index", "2");
    });
    // end of turn on\off map zoom


    $(".route-btn").on("click", function (event) {
        event.preventDefault();

        if (isGeolocationActive) {
            if($(".tab-panel .kiev").hasClass("active")) {
                directionsDisplay.setMap(kievMap);
                calcRoute(userCurrentPos, myLatLngKiev);
            } else if($(".tab-panel .moscow").hasClass("active")) {
                directionsDisplay.setMap(moscowMap);
                calcRoute(userCurrentPos, myLatLngMoscow);
            }
            $(tabPanel).slideUp();
            $(closeContactsBtns).children().toggleClass("icon-cross-yellow icon-arrow-down-yellow");
        } else {
            alert("Please, enable access to your geo-location! Then reload the page!!!");
        }

    });

    // ************************************************************************************

    // var isMobileViewFlag = true,
    //     mobileViewWidth = 768;
    //
    // // ********************************************************************************
    // resizeWindowHandler();
    // // scrollWindowHandler(); // initial call!!!
    // // ********************************************************************************
    //
    // // **********************  EVENT HANDLERS *************************
    //
    // function resizeWindowHandler(event) {
    //     if (window.innerWidth < mobileViewWidth) {
    //         isMobileViewFlag = true;
    //     } else {
    //         isMobileViewFlag = false;
    //     }
    // }
    //
    // // ************************************************************************************
    // // ***************** REGISTER EVENT HANDLERS *******************
    //
    // // window.addEventListener('scroll', scrollWindowHandler);
    // window.addEventListener('resize', resizeWindowHandler);
    //
    // // ************************************************************************************
    //

    // $('#preloader').fadeIn(10);

    var contactsSlider = $('.contacts-slider');

    $(contactsSlider).owlCarousel({
        loop:true,
        margin:10,
        nav:false,

        autoplay:false,
        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:4000, //Время смены слайда
        autoplayHoverPause:false,

        responsive:{
            0:{
                items:1
            },
            800:{
                items:1
            },
            1200:{
                items:1
            }
        },

        onInitialized: function (event) {
            // alert("Hello!");
            // $('#preloader').fadeOut(10);
        }
    });

    // Go to the next item
    $('.contacts-slider-cont .arrow-left-btn').click(function() {
        $(contactsSlider).trigger('prev.owl.carousel');
    });
    // Go to the previous item
    $('.contacts-slider-cont .arrow-right-btn').click(function() {
        $(contactsSlider).trigger('next.owl.carousel');
    });


    // check for Geolocation support
    // if (navigator.geolocation) {
    //     console.log('Geolocation is supported!');
    // }
    // else {
    //     console.log('Geolocation is not supported for this Browser/OS version yet.');
    // }

    // // determine users coordinates - start *************************************************
    // var startPos;
    // var geoOptions = {
    //     timeout: 10 * 1000
    // };
    //
    // var geoSuccess = function(position) {
    //     startPos = position;
    //     // document.getElementById('startLat').innerHTML = startPos.coords.latitude;
    //     // document.getElementById('startLon').innerHTML = startPos.coords.longitude;
    //     console.log(startPos.coords.latitude + " and " + startPos.coords.longitude);
    // };
    // var geoError = function(error) {
    //     console.log('Error occurred. Error code: ' + error.code);
    //     // error.code can be:
    //     //   0: unknown error
    //     //   1: permission denied
    //     //   2: position unavailable (error response from location provider)
    //     //   3: timed out
    // };
    //
    // navigator.geolocation.getCurrentPosition(geoSuccess, geoError, geoOptions);
    // // determine users coordinates - end ***************************************************

    initMap(); // initial call




});