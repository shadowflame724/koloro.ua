/**
 * Created by Glalex on 11.05.2017.
 */
$(function () {
    var subscribeForm = document.querySelector(".subscribe-form");

    function koloroFormShow(koloroForm) {
        $(koloroForm).addClass("active");
        $(koloroForm).fadeIn(400);
    }

    function koloroFormHide(koloroForm) {
        $(koloroForm).removeClass("active");
        $(koloroForm).fadeOut(400);
    }

    $(".footer-subscribe-btn").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation(); // to avoid inherit click events
        koloroFormShow(subscribeForm);
    });

    $(".subscribe-form .close-btn").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation(); // to avoid inherit click events
        koloroFormHide(subscribeForm);
    });

    // form-handler
    $(subscribeForm).submit(function(event) { //устанавливаем событие отправки для формы
        event.preventDefault();
        var form_data = $(this).serialize(); //собераем все данные из формы
        $.ajax({
            type: "POST", //Метод отправки
            url: "/", //путь до php фаила отправителя
            data: form_data,
            success: function () {
                //код в этом блоке выполняется при успешной отправке сообщения
                // alert("Ваше сообщение отправлено!");
                subscribeForm.reset();
                successFormShow();
                koloroFormHide(subscribeForm);
            },
            error: function () {
                alert("Произошла ошибка при отправке...( Попробуйте еще раз!");
            }
        });
    });

    function modalClose (e) {
        if ( e.keyCode === 27 ) {
            // close forms on ESC
            if($(subscribeForm).hasClass("active")) {
                koloroFormHide(subscribeForm);
            }
        }
    }

    document.addEventListener('keydown', modalClose);
});