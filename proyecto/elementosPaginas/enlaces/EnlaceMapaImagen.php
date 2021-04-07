<?php

class EnlaceMapaImagen extends EtiquetaEnlacesHtml
{

    public $elementos = "Mapa Imagen";
    public $atributos = array("href"=>"http://localhost/php/mapaImagen.php", "class"=>"miEnlace");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

