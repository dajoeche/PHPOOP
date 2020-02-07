<?php

class EtiquetaBotonHtml extends IManejadorEtiquetas
{

    public $apertura = "<button>";
    public $elementos = "Texto del Botón";
    public $cierre = "</button>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

