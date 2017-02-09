

/* global px */


$(document).ready(function () {
    centerButton();
    centerForm();
    $('body').css("visibility", "visible");
});

$(window).resize(function () {
    centerButton();
    centerForm();
});

//qd on clique sur le bouton
$("button").click(function (e) {
    $(this).fadeOut(600, function () {

        $("#selection").fadeIn(600);
    });
});

/**
 * 
 * fonction qui centre le bouton
 * @returns (undefined)
 */


function centerButton() {
    //on récupère les dimensions de la fenêtre
    var w = $(window).width();
    var h = $(window).height();
    //on récupère les dimensions du bouton
    var buttonw = $("button").width();
    var buttonh = $("button").height();
    //on calcule la position du bouton afin qu'il soit au centre 
    var top = (h - buttonh) / 2;
    var left = (w - buttonw) / 2;
    //on affecte les nouvelles positions calculées
    $("button").css({
        "left": left + "px",
        "top": top + "px"
    });
}

function centerForm() {
    //on récupère les dimensions de la fenêtre
    var w = $(window).width();
    var h = $(window).height();
    //on récupère les dimensions du bouton
    var selectionw = $("#selection").width();
    var selectionh = $("#selection").height();
    //on calcule la position du bouton afin qu'il soit au centre 
    var top = (h - selectionh) / 2;
    var left = (w - selectionw) / 2;
    //on affecte les nouvelles positions calculées
    $("#selection").css({
        "left": left + "px",
        "top": top + "px"
    });
}