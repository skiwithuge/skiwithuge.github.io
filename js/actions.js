function togglebtn(divId) {
    $("." + divId).toggle();
    $("#" + divId).toggle('slow');
    //$('#timelineopen').attr('class', 'show');;
};
function get_action() {
    return atob("aHR0cHM6Ly9mb3Jtc3ByZWUuaW8vc2tpd2l0aHVnZUBnbWFpbC5jb20=");
}
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