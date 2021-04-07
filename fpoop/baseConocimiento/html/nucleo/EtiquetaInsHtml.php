<?php

class EtiquetaInsHtml extends IManejadorEtiquetas
{

    public $apertura = "<ins>";
    public $elementos = "Página Principal";
    public $cierre = "</ins>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

