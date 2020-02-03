<?php

class EtiquetaEnlacesHtml extends IManejadorEtiquetas
{

    public $apertura = "<a>";
    public $atributos = array("href"=>"https://www.w3schools.com");
    public $elementos = "Texto del Enlace";
    public $cierre = "</a>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

