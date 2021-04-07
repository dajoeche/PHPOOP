<?php

class EnlaceBloqueEnLinea extends EtiquetaEnlacesHtml
{

    public $elementos = "Bloque En Linea";
    public $atributos = array("href"=>"http://localhost/php/bloqueEnLinea.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
