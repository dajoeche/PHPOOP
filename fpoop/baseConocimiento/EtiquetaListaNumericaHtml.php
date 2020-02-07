<?php

class EtiquetaListaNumericaHtml extends IManejadorEtiquetas
{

    public $apertura = "<ol>";
    public $elementos = "*";
    public $cierre = "</ol>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

