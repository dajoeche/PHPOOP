<?php

class EntradaNombre extends EtiquetaEntradaHtml
{
							
	public $atributos = array(
								"type"=>"text", 
								"name"=>"nombre",
	                         );
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

