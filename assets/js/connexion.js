$(function () {
    $("#pop-connexion").hide();
    $("#btn-connexion").click(function(){
        $("#pop-connexion").show(300);
        $("section").addClass('blur');

    });
    $("#close-connexion").click(function(){
        $("#pop-connexion").hide(400);
        $("section").removeClass('blur');
    });
});