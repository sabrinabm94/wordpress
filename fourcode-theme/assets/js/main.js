jQuery(document).ready(function() {
	createHeader();	
	createFooter();
	createSliderHome();
});

function createHeader() {
	var number = jQuery('.header .hide-mobile .menu ul li').length;
	console.log(number);
	jQuery('.header .hide-mobile .menu ul li').each(function() {
		var width = (100/number)-0.5;
		jQuery(this).css('width', width + '%');
	});
}

function createFooter() {
	var number = jQuery('.footer .social-list-item').length;
	jQuery('.social-list-item').each(function() {
		var width = 98/number;
		jQuery(this).css('width', width + '%');
	});
}

function createSliderHome() {
	jQuery('.slider-home').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 1,
	  adaptiveHeight: true
	});
}
