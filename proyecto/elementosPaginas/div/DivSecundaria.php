<?php

class DivSecundaria extends EtiquetaDivHtml
{

	    public $elementos = array(
									"EtiquetaH1HtmlPrincipal", 
									"EtiquetaNegritaHtmlPrincipal", 
									"Saltar2Lineas", 
									"ParrafoPreformateado",
									"EnlacePaginaPrincipal"
								);
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

