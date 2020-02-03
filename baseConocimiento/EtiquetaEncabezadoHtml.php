<?php

class EtiquetaEncabezadoHtml extends IManejadorEtiquetas
{

    public $apertura = "<head>";
    public $elementos = "Página Principal";
    public $cierre = "</head>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

