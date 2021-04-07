<?php

class EtiquetaAbreviaturasHtml extends IManejadorEtiquetas
{

    public $apertura = "<abbr>";
    public $elementos = "Página Principal";
    public $cierre = "</abbr>";
	public $atributos = array(
								"title"=>"World Health Organization",
	                         );    
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

