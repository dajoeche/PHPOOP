<?php

class EtiquetaListaVinetaHtml extends IManejadorEtiquetas
{

    public $apertura = "<ul>";
    public $elementos = "*";
    public $cierre = "</ul>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

