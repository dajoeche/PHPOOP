<?php

class EtiquetaPreformatoHtml extends IManejadorEtiquetas
{

    public $apertura = "<pre>";
    public $elementos = "Página Principal";
    public $cierre = "</pre>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

