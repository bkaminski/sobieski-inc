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
