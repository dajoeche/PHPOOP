<?php

class JSCanvasCuadradoElGrito extends EtiquetaScriptHtml
{
    public $elementos = 'function myCanvas() {
                         var c = document.getElementById("myCanvas8");
                         var ctx = c.getContext("2d");
                         var img = document.getElementById("scream");
                         ctx.drawImage(img,10,10);}';

    public function __construct()
    {
		parent::__construct();
    }


}

?>
