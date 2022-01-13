<?php

class JSCanvasCuadradoTexto extends EtiquetaScriptHtml
{
    public $elementos = 'var c = document.getElementById("myCanvas4");
                         var ctx = c.getContext("2d");
                         ctx.font = "30px Arial";
                         ctx.fillText("Hello World",10,50);';

    public function __construct()
    {
		parent::__construct();
    }


}

?>
