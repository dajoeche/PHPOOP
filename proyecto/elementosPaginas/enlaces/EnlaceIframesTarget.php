<?php

class EnlaceIframesTarget extends EtiquetaEnlacesHtml
{

    public $elementos = "Enlace Iframes Target";
    public $atributos = array(
                              "href"=>"http://localhost/php/proyecto/paginas/id.php",
                              "target"=>"iframe_a",
                              "class"=>"miEnlace",
                            );

    public function __construct()
    {
		parent::__construct();
    }


}

?>
