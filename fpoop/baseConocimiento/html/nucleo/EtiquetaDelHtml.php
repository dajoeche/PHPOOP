<?php

class EtiquetaDelHtml extends IManejadorEtiquetas
{

    public $apertura = "<del>";
    public $elementos = "Página Principal";
    public $cierre = "</del>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

