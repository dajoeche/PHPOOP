<?php

class BotonVolver extends EtiquetaBotonHtml
{

    public $elementos = "Volver";
    public $atributos = array("onclick"=>"document.location = 'http://localhost/php/paginaPrincipal.php'");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

