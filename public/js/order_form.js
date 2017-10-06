/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));
/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function( $, window, document, undefined )
{
	$( '.inputfile' ).each( function()
	{
		var $input	 = $( this ),
			$label	 = $input.next( 'label' ),
			labelVal = $label.html();

		$input.on( 'change', function( e )
		{
			var fileName = '';

			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else if( e.target.value )
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				$label.find( 'span' ).html( fileName );
			else
				$label.html( labelVal );
		});

		// Firefox bug fix
		$input
		.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
		.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
	});
})( jQuery, window, document );
(function (e, t, n) {
    var r = e.querySelectorAll("html")[0];
    r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
})(document, window, 0);

// .orderform_link
$(function () {
    var orderForm = document.querySelector(".order-form");

    function koloroFormShow(koloroForm) {
        $(koloroForm).addClass("active");
        $(koloroForm).fadeIn(400);
    }

    function koloroFormHide(koloroForm) {
        $(koloroForm).removeClass("active");
        $(koloroForm).fadeOut(400);
    }

    $(".order-form-btn").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation(); // to avoid inherit click events
        koloroFormShow(orderForm);
    });

    $(".order-form .close-btn").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation(); // to avoid inherit click events
        koloroFormHide(orderForm);
    });

    // form-handler
    $(orderForm).submit(function(event) { //устанавливаем событие отправки для формы
        event.preventDefault();
        var form_data = $(this).serialize(); //собераем все данные из формы
        $.ajax({
            type: "POST", //Метод отправки
            url: "/", //путь до php фаила отправителя
            data: form_data,
            success: function () {
                //код в этом блоке выполняется при успешной отправке сообщения
                // alert("Ваше сообщение отправлено!");
                orderForm.reset();
                successFormShow();
                koloroFormHide(orderForm);
            },
            error: function () {
                alert("Произошла ошибка при отправке...( Попробуйте еще раз!");
            }
        });
    });

    function modalClose (e) {
        if ( e.keyCode === 27 ) {
            // close forms on ESC
            if($(orderForm).hasClass("active")) {
                koloroFormHide(orderForm);
            }
        }
    }

    document.addEventListener('keydown', modalClose);
});