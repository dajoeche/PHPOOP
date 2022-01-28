<?php

class EnlaceGeolocation extends EtiquetaEnlacesHtml
{

    public $elementos = "Geolocation";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/geolocation.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
