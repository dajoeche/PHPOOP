<?php

class JSCanvasCuadradoCirculo extends EtiquetaScriptHtml
{
    public $elementos = 'var c = document.getElementById("myCanvas3");
                         var ctx = c.getContext("2d");
                         ctx.beginPath();
                         ctx.arc(95,50,40,0,2*Math.PI);
                         ctx.stroke();';

    public function __construct()
    {
		parent::__construct();
    }


}

?>
