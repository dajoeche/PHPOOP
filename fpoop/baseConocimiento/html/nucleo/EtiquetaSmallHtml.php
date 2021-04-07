<?php

class EtiquetaSmallHtml extends IManejadorEtiquetas
{

    public $apertura = "<small>";
    public $elementos = "Página Principal";
    public $cierre = "</small>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

