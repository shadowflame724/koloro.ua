/**
 * Created by Glalex on 31.05.2017.
 */

'use strict';

$(function () {
    var topContainer = document.querySelector(".top-container");

    function readMoreBtnHandler() {
        $(this.parentNode.querySelector(".for-read-more")).slideToggle();

        $(this).toggleText("Читать дальше", "Скрыть");
    }
    $(".read-more-btn").on("click", readMoreBtnHandler);

    var bgImages = ['images/company_page/company_main_1.jpg', 'images/company_page/company_main_2.jpg'];
    var slideCnt = 0;

    setInterval(function () {
        // style="background-image: url('/images/company_page/company_main_1.jpg');";
        var tempBgUrl;


        if(slideCnt) {
            slideCnt = 0;
        } else {
            slideCnt = 1;
        }

        tempBgUrl = "url(" + "'" + bgImages[slideCnt] + "')" ;

        $(".top-container").css("background-image", tempBgUrl);
    }, 5000)
});