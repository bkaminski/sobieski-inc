(function( $ ) {

$(document).ready(function(){
    $(".career-baltimore, .career-delaware, .career-executive, .career-kop, .career-nj, .career-philadelphia, .career-south-delaware, .career-york").hide();
    
    $("#baltimoreCareer").on("click",function(){
        $(".career-baltimore").show();
        $(".career-delaware, .career-executive, .career-kop, .career-nj, .career-philadelphia, .career-south-delaware, .career-york").hide();
    });
    $("#delawareCareer").on("click",function(){
        $(".career-delaware").show();
        $(".career-baltimore, .career-executive, .career-kop, .career-nj, .career-philadelphia, .career-south-delaware, .career-york").hide();
    });
    $("#executiveCareer").on("click",function(){
        $(".career-executive").show();
        $(".career-baltimore, .career-delaware, .career-kop, .career-nj, .career-philadelphia, .career-south-delaware, .career-york").hide();
    });
    $("#kopCareer").on("click",function(){
        $(".career-kop").show();
        $(".career-baltimore, .career-delaware, .career-executive, .career-nj, .career-philadelphia, .career-south-delaware, .career-york").hide();
    });
    $("#njCareer").on("click",function(){
        $(".career-nj").show();
        $(".career-baltimore, .career-delaware, .career-executive, .career-kop, .career-philadelphia, .career-south-delaware, .career-york").hide();
    });
    $("#phillyCareer").on("click",function(){
        $(".career-philadelphia").show();
        $(".career-baltimore, .career-delaware, .career-executive, .career-kop, .career-nj, .career-south-delaware, .career-york").hide();
    });
     $("#southDelawareCareer").on("click",function(){
        $(".career-south-delaware").show();
        $(".career-baltimore, .career-delaware, .career-executive, .career-kop, .career-nj, .career-philadelphia, .career-york").hide();
    });
      $("#yorkCareer").on("click",function(){
        $(".career-york").show();
        $(".career-baltimore, .career-delaware, .career-executive, .career-kop, .career-nj, .career-philadelphia, .career-south-delaware").hide();
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
