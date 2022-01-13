<?php

class EnlaceSVGHtml extends EtiquetaEnlacesHtml
{

    public $elementos = "SVG";
    public $atributos = array("href"=>"http://localhost/php/svg.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
