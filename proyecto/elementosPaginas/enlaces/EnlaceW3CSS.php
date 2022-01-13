<?php

class EnlaceW3CSS extends EtiquetaEnlacesHtml
{

    public $elementos = "W3CSS";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/w3css.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
