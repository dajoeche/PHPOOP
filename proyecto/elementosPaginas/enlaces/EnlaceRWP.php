<?php

class EnlaceRWP extends EtiquetaEnlacesHtml
{

    public $elementos = "RWP";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/rwp.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
