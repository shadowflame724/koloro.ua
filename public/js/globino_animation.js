!function(a){var o=a(window),t=o.height();o.resize(function(){t=o.height()}),a.fn.parallax=function(e,p,r){function l(){var r=o.scrollTop();x.each(function(){var o=a(this),l=o.offset().top,i=n(o);l+i<r||l>r+t||x.css("backgroundPosition",e+" left "+Math.round((s-r)*p)+"px")})}var n,s,x=a(this);x.each(function(){s=x.offset().top}),n=r?function(a){return a.outerHeight(!0)}:function(a){return a.height()},(arguments.length<1||null===e)&&(e="50%"),(arguments.length<2||null===p)&&(p=.1),(arguments.length<3||null===r)&&(r=!0),o.bind("scroll",l).resize(l),l()}}(jQuery),$("#paralax_showcase_1").parallax("top 0px",.7),$("#paralax_showcase_2").parallax("top 0px",.4),$("#paralax_showcase_3").parallax("top 0px",.8),$("#paralax_on_wave_1").parallax("top 0px",.7),$("#paralax_on_wave_2").parallax("top 0px",.4),$("#paralax_on_wave_3").parallax("top 0px",.8),$("#showcase_stereotip_1").parallax("top 0px",.7),$("#showcase_stereotip_2").parallax("top 0px",.4),$("#showcase_stereotip_3").parallax("top 0px",.8),$("#showcase_stereotip_6").parallax("top 0px",.7),$("#showcase_stereotip_5").parallax("top 0px",.4),$("#showcase_stereotip_4").parallax("top 0px",.8),$("#showcase2_3").parallax("top 0px",.7),$("#showcase2_2").parallax("top 0px",.4),$("#showcase2_1").parallax("top 0px",.8),$(".letter").mouseover(function(){$(".letter_input").addClass("change_border")}),$(".letter").mouseleave(function(){$(".letter_input").removeClass("change_border")}),$(".letter input").focus(function(){$(this).removeClass("change_border")}),$(document).ready(function(){$(".what_element").mousemove(function(a){$(".moremilk, .netto").css({"background-position-x":Math.round(.01*a.offsetX)+"px","background-position-y":Math.round(.01*a.offsetX)+"px"})})});