<?php

class EtiquetaCiteHtml extends IManejadorEtiquetas
{

    public $apertura = "<cite>";
    public $elementos = "Página Principal";
    public $cierre = "</cite>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

