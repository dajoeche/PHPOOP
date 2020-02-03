<?php

class DivMenu extends EtiquetaDivHtml
{

	    public $elementos = array(
									"Espaciador",
									"EnlacePaginaSecundaria", 
									"Espaciador", 
									"EnlacePaginaTerciaria", 
									"Espaciador", 
									"EnlaceLista",
									"Espaciador", 
									"EnlaceFormulario",
									"Espaciador",
									"Saltar2Lineas", 
									"ImagenMonitor"
								);
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

