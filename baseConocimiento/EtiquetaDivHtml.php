<?php

class EtiquetaDivHtml extends IManejadorEtiquetas
{

    public $apertura = "<div>";
    public $elementos = "Página Principal";
    public $cierre = "</div>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

