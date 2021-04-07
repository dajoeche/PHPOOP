<?php

class EtiquetaEnfasisHtml extends IManejadorEtiquetas
{

    public $apertura = "<em>";
    public $elementos = "Página Principal";
    public $cierre = "</em>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

