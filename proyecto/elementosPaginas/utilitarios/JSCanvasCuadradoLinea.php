<?php

class JSCanvasCuadradoLinea extends EtiquetaScriptHtml
{
    public $elementos = 'var c = document.getElementById("myCanvas2");
                         var ctx = c.getContext("2d");
                         ctx.moveTo(0,0);
                         ctx.lineTo(200,100);
                         ctx.stroke();';

    public function __construct()
    {
		parent::__construct();
    }


}

?>
