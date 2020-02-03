<?php

class EtiquetaParrafoHtml extends IManejadorEtiquetas
{

    public $apertura = "<p>";
    public $elementos = "Página Principal";
    public $cierre = "</p>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

