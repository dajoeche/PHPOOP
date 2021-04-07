<?php

class EtiquetaDireccionHtml extends IManejadorEtiquetas
{

    public $apertura = "<address>";
    public $elementos = "Página Principal";
    public $cierre = "</address>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

