<?php

class EtiquetaNegritaHtml extends IManejadorEtiquetas
{

    public $apertura = "<b>";
    public $elementos = "Página Principal";
    public $cierre = "</b>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

