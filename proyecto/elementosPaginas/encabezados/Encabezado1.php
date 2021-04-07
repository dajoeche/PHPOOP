<?php

class Encabezado1 extends EtiquetaH1Html
{

    public $elementos = "Este es el Encabezado H1";
    public $atributos = array("style"=>"background-color:powderblue; color:blue; font-family:courier;");
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

