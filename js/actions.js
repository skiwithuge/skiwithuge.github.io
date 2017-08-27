function togglebtn(divId) {
    $("." + divId).toggle();
    $("#" + divId).toggle('slow');
    //$('#timelineopen').attr('class', 'show');;
};
$(document).ready(function(){
    $('.zoom').hover(function() {
        $('.zoom').addClass('transition');
    }, function() {
        $('.zoom').removeClass('transition');
    });

    $(function(){
        $('.image-link').viewbox();
    });
});