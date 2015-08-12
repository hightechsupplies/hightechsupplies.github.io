var fader1 = 1;
var fader2 = 1;
var temp2;
var left = 0;
var imagenes = new Array();

function preload() {
    for (i = 0; i < preload.arguments.length; i++) {
        imagenes[i] = new Image();
        imagenes[i].src = preload.arguments[i];
    }
}

preload(
    "imagenes/fader1/fader1.jpg",
    "imagenes/fader1/fader2.jpg",
    "imagenes/fader1/fader3.jpg",
    "imagenes/fader1/fader4.jpg",
    "imagenes/fader1/fader5.jpg",
    "imagenes/fader1/fader6.jpg",
    "imagenes/fader1/fader7.jpg",
    "imagenes/fader1/fader8.jpg",
    "imagenes/fader1/fader9.jpg",
    "imagenes/fader1/fader10.jpg",
    "imagenes/fader1/fader11.jpg",
    "imagenes/fader2/left1.jpg",
    "imagenes/fader2/left2.jpg",
    "imagenes/fader2/left3.jpg",
    "imagenes/fader2/left4.jpg",
    "imagenes/fader2/left5.jpg",
    "imagenes/fader2/left6.jpg"
)

$(document).ready(function(){
    $('.dropdown-toggle').dropdown();
    function temporizador1(){
        $("#fader1").css("background-image","url(imagenes/fader1/fader"+fader1+".jpg)");
        fader1++;
        if (fader1 > 10){fader1 = 1;}
    }
    
    function temporizador2(){
        $("#fader2").css("background-image","url(imagenes/fader2/left"+fader2+".jpg)");
        $(".bolita").css("background","linear-gradient(white,#999)");
        $(".bolita").eq(fader2-1).css("background","linear-gradient(#ccc,#666)");
        fader2++;
        if (fader2 > 6){fader2 = 1;}
    }
    
    $(".bolita").click(function(){
        $(".bolita").css("background","linear-gradient(white,#999)");
        clearInterval(temp2);
        temp2 = setInterval(function(){temporizador2()}, 5000);
    })
    
    $(".bolita").eq(0).click(function(){
        $("#fader2").css("background-image","url(imagenes/fader2/left1.jpg)");
        $(this).css("background","linear-gradient(#ccc,#666)");
        fader2 = 2;
    })
    $(".bolita").eq(1).click(function(){
        $("#fader2").css("background-image","url(imagenes/fader2/left2.jpg)");
        $(this).css("background","linear-gradient(#ccc,#666)");
        fader2 = 3;
    })
    $(".bolita").eq(2).click(function(){
        $("#fader2").css("background-image","url(imagenes/fader2/left3.jpg)");
        $(this).css("background","linear-gradient(#ccc,#666)");
        fader2 = 4;
    })
    $(".bolita").eq(3).click(function(){
        $("#fader2").css("background-image","url(imagenes/fader2/left4.jpg)");
        $(this).css("background","linear-gradient(#ccc,#666)");
        fader2 = 5;
    })
    $(".bolita").eq(4).click(function(){
        $("#fader2").css("background-image","url(imagenes/fader2/left5.jpg)");
        $(this).css("background","linear-gradient(#ccc,#666)");
        fader2 = 6;
    })
    $(".bolita").eq(5).click(function(){
        $("#fader2").css("background-image","url(imagenes/fader2/left6.jpg)");
        $(this).css("background","linear-gradient(#ccc,#666)");
        fader2 = 1;
    })
     
    clearInterval(temp2);
    temporizador1()
    temporizador2();
    setInterval(function(){temporizador1()}, 6000);
    temp2 = setInterval(function(){temporizador2()}, 5000);
    
    function crearImg()
    {
        for(var i=0;i<12;i++)
        {
            $("#fotos").append($("<img>").attr("src","imagenes/slider/"+(i+1)+".jpg").attr("class","fotos").css("left",(i*170)+"px"));
        }
    }
    crearImg();
    
    function temporizador3()
    {
        left = left+2;
        if(left > 2040)
        {left = 0}
        for(var i=0;i<12;i++)
        {
            lugar = (i*170)+left;
            if(lugar > 2040)
            {lugar = lugar-2040;}
            $(".fotos").eq(i).css("left",lugar+"px");
        }
    }
    setInterval(function(){temporizador3()}, 50);    
});