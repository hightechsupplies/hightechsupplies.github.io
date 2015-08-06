var imagenes = new Array();
function preload() {
    for (i = 0; i < preload.arguments.length; i++) {
        imagenes[i] = new Image();
        imagenes[i].src = preload.arguments[i];
    }
}

preload(
    "imagenes/mapas/worldmap.jpg",
    "imagenes/mapas/northamerica.jpg",
    "imagenes/mapas/centralamerica.jpg",
    "imagenes/mapas/southamerica.jpg"
)

$(document).ready(function(){
    $(".north").mouseenter(function(){
        $("#map").attr("src","imagenes/mapas/northamerica.jpg");
        $("a.north").addClass( "hovered" );
    });
    $(".north").mouseleave(function(){
        $("#map").attr("src","imagenes/mapas/worldmap.jpg");
        $("a.north").removeClass( "hovered" );
    });
    
    $(".central").mouseenter(function(){
        $("#map").attr("src","imagenes/mapas/centralamerica.jpg");
        $("a.central").addClass( "hovered" );
    });
    $(".central").mouseleave(function(){
        $("#map").attr("src","imagenes/mapas/worldmap.jpg");
        $("a.central").removeClass( "hovered" );
    });
    
    $(".south").mouseenter(function(){
        $("#map").attr("src","imagenes/mapas/southamerica.jpg");
        $("a.south").addClass( "hovered" );
    });
    $(".south").mouseleave(function(){
        $("#map").attr("src","imagenes/mapas/worldmap.jpg");
        $("a.south").removeClass( "hovered" );
    });
});