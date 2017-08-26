function togglebtn(divId) {
    $("." + divId).toggle();
    $("#" + divId).toggle('slow');
    //$('#timelineopen').attr('class', 'show');;
};

$(document).ready(function(){
    $('.zoom').hover(function() {
        $('.zoom').addClass('transition');
        $('.carousel').attr("width", "200%");
    }, function() {
        $('.zoom').removeClass('transition');
    });
});