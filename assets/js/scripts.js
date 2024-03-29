(function( $ ) {

$(document).ready(function(){
    $(".career-baltimore, .career-delaware, .career-virginia, .career-kop, .career-nj, .career-allentown, .career-south-delaware, .career-york").hide();
    
    $(".baltimoreCareer").on("click",function(){
        $(".career-baltimore").show();
        $(".career-delaware, .career-virginia, .career-kop, .career-nj, .career-allentown, .career-south-delaware, .career-york").hide();
    });
    $(".delawareCareer").on("click",function(){
        $(".career-delaware").show();
        $(".career-baltimore, .career-virginia, .career-kop, .career-nj, .career-allentown, .career-south-delaware, .career-york").hide();
    });
    $(".virginiaCareer").on("click",function(){
        $(".career-virginia").show();
        $(".career-baltimore, .career-delaware, .career-kop, .career-nj, .career-allentown, .career-south-delaware, .career-york").hide();
    });
    $(".kopCareer").on("click",function(){
        $(".career-kop").show();
        $(".career-baltimore, .career-delaware, .career-virginia, .career-nj, .career-allentown, .career-south-delaware, .career-york").hide();
    });
    $(".njCareer").on("click",function(){
        $(".career-nj").show();
        $(".career-baltimore, .career-delaware, .career-virginia, .career-kop, .career-allentown, .career-south-delaware, .career-york").hide();
    });
    $(".allentownCareer").on("click",function(){
        $(".career-allentown").show();
        $(".career-baltimore, .career-delaware, .career-virginia, .career-kop, .career-nj, .career-south-delaware, .career-york").hide();
    });
     $(".southDelawareCareer").on("click",function(){
        $(".career-south-delaware").show();
        $(".career-baltimore, .career-delaware, .career-virginia, .career-kop, .career-nj, .career-allentown, .career-york").hide();
    });
      $(".yorkCareer").on("click",function(){
        $(".career-york").show();
        $(".career-baltimore, .career-delaware, .career-virginia, .career-kop, .career-nj, .career-allentown, .career-south-delaware").hide();
    });
});

})( jQuery );

 
(function( $ ) {

//Scroll to top button
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
//Animate slide up and down nav dropdowns.
$('.dropdown').on('show.bs.dropdown', function(e) {
	$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});
$('.dropdown').on('hide.bs.dropdown', function(e) {
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

//REMOVE TITLE TAG FROM LINK HOVER
$('.nav-link').removeAttr('title');

//Add class to active paginated item
if($('li.page-link').attr('href') === undefined) { 
   $('li.page-link').addClass('page-link-active');
}

//Check if page is blog then add class to read more button
if ($('.blog, .page-template-page-commercial-php')[0]){
    $('.excerpt-button').addClass('excerpt-card');
} else if ($('.page-template, .page-template-services-template ')[0]) {
	 $('.excerpt-button').addClass('excerpt-card');
    // Do nothing
} else {
	
}

//SHOW SCHEDULE ENGIN
$( ".schedule--engine" ).click(function() {
  ScheduleEngine.show()
});

//TRIGGER SEARCH MODAL
    $(".sobieski-search-modal").click(function(){
        $("#searchModal").modal('show');
    });

    //FOCUS SEARCH INPUT
    $('#searchModal').on('shown.bs.modal', function () {
    	$('#searchSobieski').trigger('focus')
    });


//Hover on State Images
var addclass = 'career-highlight-color';
var $cols = $('.career-highlight').click(function(e) {
    $cols.removeClass(addclass);
    $(this).addClass(addclass);
});

//Smooth Scroll Careers
$("#careerLink").click(function() {
    $('html, body').animate({
        scrollTop: $("#careerLinkTarget").offset().top
    }, 800);
});

})( jQuery );

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
			$('.sub-nav').removeClass('float-right');
			$('.specials--col1').removeClass('text-right');
			$('.specials--col2').removeClass('text-right').removeClass('ml-4');
			$('.specials--col3').removeClass('mr-4');
			$('.down--arrow').removeClass('fa-fw fa-lg');      
		};
		if ($window.width() >= 992) {
			$('.commercial-nav').removeClass('mt-1');
			$('.career-slider').removeClass('pl-0');
			$('.sub-nav').removeClass('navbar-nav');
			$('.sub-nav').addClass('float-right');
			$('.specials--col1').addClass('text-right');
			$('.specials--col2').addClass('text-right').addClass('ml-4');
			$('.specials--col3').addClass('mr-4');
			$('.down--arrow').addClass('fa-fw fa-lg'); 
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	
})( jQuery );

(function( $ ) {

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});

if($('li.page-link').attr('href') === undefined) { 
   $('li.page-link').addClass('page-link-active');
}



})( jQuery );
