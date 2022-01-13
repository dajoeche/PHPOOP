<?php

class JSCanvasCuadradoTextoStoke extends EtiquetaScriptHtml
{
    public $elementos = 'var c = document.getElementById("myCanvas5");
                         var ctx = c.getContext("2d");
                         ctx.font = "30px Arial";
                         ctx.strokeText("Hello World",10,50);';

    public function __construct()
    {
		parent::__construct();
    }


}

?>
