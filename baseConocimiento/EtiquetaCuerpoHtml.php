<?php

class EtiquetaCuerpoHtml extends IManejadorEtiquetas
{

    public $apertura = "<body>";
    public $elementos = "Página Principal";
    public $cierre = "</body>";
        
    public function __construct() 
    {  
		parent::__construct();
    }
 
      
}

?>

