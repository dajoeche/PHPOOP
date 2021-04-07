<?php

class EtiquetaSubHtml extends IManejadorEtiquetas
{

    public $apertura = "<sub>";
    public $elementos = "Página Principal";
    public $cierre = "</sub>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

