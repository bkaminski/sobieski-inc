(function( $ ) {

$(document).ready(function(){
    $(".career-baltimore, .career-delaware, .career-executive").hide();
    $("#baltimoreCareer").on("click",function(){
        $(".career-baltimore").show();
        $(".career-delaware, .career-executive").hide();
    });
    $("#delawareCareer").on("click",function(){
        $(".career-delaware").show();
        $(".career-baltimore, .career-executive").hide();
    });
    $("#executiveCareer").on("click",function(){
        $(".career-executive").show();
        $(".career-baltimore, .career-delaware").hide();
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
} else {
    // Do nothing
}

//TRIGGER SEARCH MODAL
    $(".sobieski-search-modal").click(function(){
        $("#searchModal").modal('show');
    });

    //FOCUS SEARCH INPUT
    $('#searchModal').on('shown.bs.modal', function () {
    	$('#searchSobieski').trigger('focus')
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
		};
		if ($window.width() >= 769) {
			$('.center-on-mobile1').removeClass('text-center').addClass('text-right');
			$('.center-on-mobile2').removeClass('text-center').addClass('text-left');
			$('.commercial-nav').removeClass('mt-1');
		}
		if ($window.width() < 992) {
			$('.commercial-nav').addClass('mt-1');
		};
		if ($window.width() >= 992) {
			$('.commercial-nav').removeClass('mt-1');
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
