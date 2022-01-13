<?php

class JSCanvasCuadradoGradiente extends EtiquetaScriptHtml
{
    public $elementos = 'var c = document.getElementById("myCanvas6");
                         var ctx = c.getContext("2d");
                         // Create gradient
                         var grd = ctx.createLinearGradient(0,0,200,0);
                         grd.addColorStop(0,"red");
                         grd.addColorStop(1,"white");
                         // Fill with gradient
                         ctx.fillStyle = grd;
                         ctx.fillRect(10,10,150,80);';

    public function __construct()
    {
		parent::__construct();
    }


}

?>
