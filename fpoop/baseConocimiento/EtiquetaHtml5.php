<?php

class EtiquetaHtml5 extends IManejadorEtiquetas
{

    public $apertura = "<!DOCTYPE html>";
    public $elementos = array("CuerpoHtmlProyecto");
    public $cierre = "";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

