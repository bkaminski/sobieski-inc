(function( $ ) {
	$( document ).ready(function() {
		$('.tech-pic').waypoint(function() {
			$('.tech-pic').addClass('animated fadeInLeft tech-pic-show');
		}, {
			offset: '100%'
		});
        $('.hero-heading').waypoint(function() {
			$('.top-heading-text').addClass('animated fadeInDown top-heading-text-show');
		}, {
			offset: '100%'
		});
        $('.promo-cta').waypoint(function() {
			$('.promo-text').addClass('animated fadeInLeft promo-text-show');
		}, {
			offset: '100%'
		});
		$('.red-bar').waypoint(function() {
			$('.sobi-truck').addClass('animated fadeInRight sobi-truck-show');
		}, {
			offset: '100%'
		});
		$('.fade--up').waypoint(function() {
			$('.bullet--fade').addClass('animated fadeInUp bullet-fade-show');
		}, {
			offset: '100%'
		});
	});
})( jQuery );