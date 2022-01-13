<?php

class EnlaceMapaImagen extends EtiquetaEnlacesHtml
{

    public $elementos = "Mapa Imagen";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/mapaImagen.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>
