<?php

class EtiquetaSupHtml extends IManejadorEtiquetas
{

    public $apertura = "<sup>";
    public $elementos = "Página Principal";
    public $cierre = "</sup>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

