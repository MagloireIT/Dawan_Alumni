$(function () {
    $("#pop-sign").hide();
    $("#btn-sign").click(function(){
        $("#pop-sign").show(300);
        $("section").addClass('blur');
    });
    $("#close-sign").click(function(){
        $("#pop-sign").hide(400);
        $("section").removeClass('blur');
    });
    
});
