<?php

class EnlaceImagenBola extends EtiquetaEnlacesHtml
{

    public $elementos = array("ImagenBola");
    public $atributos = array("href"=>"http://localhost/php/paginaPrincipal.php", "class"=>"miEnlace");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

