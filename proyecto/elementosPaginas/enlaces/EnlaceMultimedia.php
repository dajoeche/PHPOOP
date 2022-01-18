<?php

class EnlaceMultimedia extends EtiquetaEnlacesHtml
{

    public $elementos = "Multimedia";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/multimedia.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
