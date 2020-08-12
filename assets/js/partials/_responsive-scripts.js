(function( $ ) {
	$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 768) {
			$('.center-on-mobile1').addClass('text-center');
			$('.center-on-mobile2').addClass('text-center');
			$('.affiliate-row').find('img').addClass('mt-2');
			$('.commercial-nav').addClass('mt-1');
			$('.career-card').removeClass('h-100');
			
		};
		if ($window.width() >= 769) {
			$('.center-on-mobile1').removeClass('text-center').addClass('text-right');
			$('.center-on-mobile2').removeClass('text-center').addClass('text-left');
			$('.commercial-nav').removeClass('mt-1');
			$('.career-card').addClass('h-100');
			
		}
		if ($window.width() < 992) {
			$('.commercial-nav').addClass('mt-1');
			$('.career-slider').addClass('pl-0');
			$('.sub-nav').addClass('navbar-nav');
		};
		if ($window.width() >= 992) {
			$('.commercial-nav').removeClass('mt-1');
			$('.career-slider').removeClass('pl-0');
			$('.sub-nav').removeClass('navbar-nav');
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	
})( jQuery );
