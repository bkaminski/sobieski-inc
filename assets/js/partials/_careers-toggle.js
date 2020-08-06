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
