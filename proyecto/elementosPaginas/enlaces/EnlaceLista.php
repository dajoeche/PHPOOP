<?php

class EnlaceLista extends EtiquetaEnlacesHtml
{

    public $elementos = "Listas";
    public $atributos = array("href"=>"http://localhost/php/lista.php", "class"=>"miEnlace");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

