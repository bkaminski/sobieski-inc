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
