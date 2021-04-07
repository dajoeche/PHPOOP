<?php

class EtiquetaItalicaHtml extends IManejadorEtiquetas
{

    public $apertura = "<i>";
    public $elementos = "Página Principal";
    public $cierre = "</i>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

