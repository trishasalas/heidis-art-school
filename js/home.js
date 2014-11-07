jQuery(document).ready(function($) {

	$('.bxslider').bxSlider({
		pager: false,
		controls: false,
		auto: true,
		slideWidth: 467,
		minSlides: 2,
		maxSlides: 4,
		moveSlides: 1,
		slideMargin: 10
	});

	$('.announcements').bxSlider({
		pager: false,
		controls: false,
		auto: true,
		mode: 'fade'
	});
});