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
