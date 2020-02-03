<?php

class EncabezadoSaludo extends EtiquetaH3Html
{

    public $elementos = "Saludo";
    public $atributos = array( "style"=>"font-size:30px; color:blue;");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

