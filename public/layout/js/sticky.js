$(document).ready(function() {
	var aboveHeight = 130;
	$(window).scroll(function(){
		if ($(window).scrollTop() > aboveHeight){
			$('.wrap-nav').addClass('fixed').css('top','0').next().css('padding-top','60px');
		} else {
			$('.wrap-nav').removeClass('fixed').next().css('padding-top','0');
		}
	});
});