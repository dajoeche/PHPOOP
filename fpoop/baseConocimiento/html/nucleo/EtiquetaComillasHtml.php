<?php

class EtiquetaComillasHtml extends IManejadorEtiquetas
{

    public $apertura = "<q>";
    public $elementos = "Página Principal";
    public $cierre = "</q>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

