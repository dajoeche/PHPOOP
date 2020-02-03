<?php

class EnlacePaginaSecundaria extends EtiquetaEnlacesHtml
{

    public $elementos = "Página Secundaria";
    public $atributos = array("href"=>"http://localhost/php/paginaSecundaria.php", "class"=>"miEnlace");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

