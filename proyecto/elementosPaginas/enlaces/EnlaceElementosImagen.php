<?php

class EnlaceElementosImagen extends EtiquetaEnlacesHtml
{

    public $elementos = "Elementos Imagen";
    public $atributos = array("href"=>"http://localhost/php/elementosPicture.php", "class"=>"miEnlace");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

