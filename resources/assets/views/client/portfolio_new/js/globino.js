(function( $ ){
	var $window = $(window);
	var windowHeight = $window.height();

	$window.resize(function () {
		windowHeight = $window.height();
	});
	

	$.fn.parallax = function(xpos, speedFactor, outerHeight) {
		var $this = $(this);
		var getHeight;
		var firstTop;
		var paddingTop = 0;
		
		//get the starting position of each element to have parallax applied to it		
		$this.each(function(){
		    firstTop = $this.offset().top;
		});

		if (outerHeight) {
			getHeight = function(jqo) {
				return jqo.outerHeight(true);
			};
		} else {
			getHeight = function(jqo) {
				return jqo.height();
			};
		}
			
		// setup defaults if arguments aren't specified
		if (arguments.length < 1 || xpos === null) xpos = "50%";
		if (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
		if (arguments.length < 3 || outerHeight === null) outerHeight = true;
		
		// function to be called whenever the window is scrolled or resized
		function update(){
			var pos = $window.scrollTop();				

			$this.each(function(){
				var $element = $(this);
				var top = $element.offset().top;
				var height = getHeight($element);

				// Check if totally above or totally below viewport
				if (top + height < pos || top > pos + windowHeight) {
					return;
				}

				$this.css('backgroundPosition', xpos + " " + "left " + Math.round((firstTop - pos) * speedFactor) + "px");
			});
		}		

		$window.bind('scroll', update).resize(update);
		update();
	};
})(jQuery);
			$('#paralax_showcase_1').parallax("top 0px", 0.7);
			$('#paralax_showcase_2').parallax("top 0px", 0.4);
			$('#paralax_showcase_3').parallax("top 0px", 0.8);

			$('#paralax_on_wave_1').parallax("top 0px", 0.7);
			$('#paralax_on_wave_2').parallax("top 0px", 0.4);
			$('#paralax_on_wave_3').parallax("top 0px", 0.8);

			$('#showcase_stereotip_1').parallax("top 0px", 0.7);
			$('#showcase_stereotip_2').parallax("top 0px", 0.4);
			$('#showcase_stereotip_3').parallax("top 0px", 0.8);

			$('#showcase_stereotip_6').parallax("top 0px", 0.7);
			$('#showcase_stereotip_5').parallax("top 0px", 0.4);
			$('#showcase_stereotip_4').parallax("top 0px", 0.8);

			$('#showcase2_3').parallax("top 0px", 0.7);
			$('#showcase2_2').parallax("top 0px", 0.4);
			$('#showcase2_1').parallax("top 0px", 0.8);

			$(".letter").mouseover(function(){
				$(".letter_input").addClass("change_border");
			});
			$(".letter").mouseleave(function(){
				$(".letter_input").removeClass("change_border");
			});
			$(".letter input").focus(function(){
				$(this).removeClass("change_border");
			});
			// $(".moremilk, .blot, .netto").hover(function(){
			// 	$(this).css("background-size", "105% 105%");
			// });
			// $(".moremilk, .blot, .netto").mouseleave(function(){
			// 	$(this).css("background-size", "100% 100%");
			// });
			$(document).ready(function(){
				$(".what_element").mousemove(function(event){
				        $(".moremilk, .netto").css({
				        	"background-position-x": Math.round(event.offsetX * 0.01) + "px",
				        	"background-position-y": Math.round(event.offsetX * 0.01) + "px"
				        });
			    });

                <!--PRELOADER !!!-->
                setTimeout(function () {
                    $('.preloader').fadeOut('slow');
                }, 10);
			});


