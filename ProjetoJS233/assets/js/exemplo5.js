$(document).ready(function () { 
    var visivel = 0;
    var troca = 0;
    $(".error").hide();
    $(".error").show("slow");
    $(".error").css("color", "#FF0000");
    $("#lista").hide();
    $("#lista").before("<a id='linkL'" +
        "class ='btn btn-danger'" +
        "href='#'> Dark Souls </a>");
    $("#linkL").click(function(){
        $("#lista").show("slow");
        if(visivel == 0){
            $("#lista").show("slow");
            visivel = 1;
        }
        else{
            $("#lista").hide("slow");
            visivel = 0;
        }
    });
    $("troca").click(function(){
        if(troca == 0){
            $("#bloco").attr("class","bloco1");
            troca = 1;
        }
        else{
            $("#bloco").attr("class","bloco");
            troca = 0;
        }
    })
});