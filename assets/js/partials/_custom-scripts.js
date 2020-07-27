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

})( jQuery );
