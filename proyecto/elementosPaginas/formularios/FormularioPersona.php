<?php

class FormularioPersona extends EtiquetaFormularioHtml
{
	
	public $atributos = array(
								"action"=>"accion.php", 
								"method"=>"post",
	                         );
							
	public $elementos = array(
	                            "ParrafoNombre",
	                            "ParrafoEdad",
	                            "ParrafoSubmit"
							 );
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

