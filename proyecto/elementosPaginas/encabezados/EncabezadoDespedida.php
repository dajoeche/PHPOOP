<?php

class EncabezadoDespedida extends EtiquetaH3Html
{

    public $elementos = "Despedida";
    public $atributos = array( "title"=>"Yo Soy Un Tooltip", "style"=>"color:green");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

