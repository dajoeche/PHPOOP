<?php

class EnlaceLayOut extends EtiquetaEnlacesHtml
{

    public $elementos = "Layout";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/layout.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
