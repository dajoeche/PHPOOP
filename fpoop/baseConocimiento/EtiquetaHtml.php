<?php

class EtiquetaHtml extends IManejadorEtiquetas
{

    public $apertura = "<html>";
    public $elementos = array("CuerpoHtmlProyecto");
    public $cierre = "</html>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

