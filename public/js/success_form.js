/**
 * Created by Glalex on 25.05.2017.
 */

var successFormTimer;

function koloroFormShow(koloroForm) {
    $(koloroForm).addClass("active");
    $(koloroForm).fadeIn(400);
}

function koloroFormHide(koloroForm) {
    $(koloroForm).removeClass("active");
    $(koloroForm).fadeOut(400);
}

function successFormShow() {
    koloroFormShow(".success-form");

    successFormTimer = setTimeout(function () {
        koloroFormHide(".success-form");
        clearTimeout(successFormTimer);
    }, 7000);
}

// successFormShow();

$(function () {
    var successForm = document.querySelector(".success-form");

    $(".success-form .success-close-btn, .success-form .close-btn").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation(); // to avoid inherit click events
        koloroFormHide(successForm);
        if(successFormTimer) {
            clearTimeout(successFormTimer);
        }
    });

    function modalClose (e) {
        if ( e.keyCode === 27 ) {
            // close forms on ESC
            if($(successForm).hasClass("active")) {
                koloroFormHide(successForm);
            }
        }
    }

    document.addEventListener('keydown', modalClose);

});