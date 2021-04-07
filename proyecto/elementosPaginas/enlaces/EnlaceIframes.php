<?php

class EnlaceIframes extends EtiquetaEnlacesHtml
{

    public $elementos = "Iframes";
    public $atributos = array("href"=>"http://localhost/php/iframes.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
