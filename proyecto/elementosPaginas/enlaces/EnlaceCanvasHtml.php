<?php

class EnlaceCanvasHtml extends EtiquetaEnlacesHtml
{

    public $elementos = "Canvas";
    public $atributos = array("href"=>"http://localhost/php/canvas.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
