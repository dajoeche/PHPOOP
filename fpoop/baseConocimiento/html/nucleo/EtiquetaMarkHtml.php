<?php

class EtiquetaMarkHtml extends IManejadorEtiquetas
{

    public $apertura = "<mark>";
    public $elementos = "Página Principal";
    public $cierre = "</mark>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

