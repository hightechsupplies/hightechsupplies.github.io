$( document ).ready(function() {
    
    var imagen = $(".cont-img-big > img").attr("src");
    $(".cont-img-small > img").mouseover(function(){
        imagen = $(this).attr('src');
        $(".cont-img-big > img").attr("src",imagen);
        $(".cont-img-small").removeClass("active");
        $(this).parent().addClass("active");
    })

});