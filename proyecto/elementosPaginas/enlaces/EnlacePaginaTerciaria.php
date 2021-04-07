<?php

class EnlacePaginaTerciaria extends EtiquetaEnlacesHtml
{

    public $elementos = "Página Terciaria";
    public $atributos = array("href"=>"http://localhost/php/paginaTerciaria.php", "class"=>"miEnlace");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

