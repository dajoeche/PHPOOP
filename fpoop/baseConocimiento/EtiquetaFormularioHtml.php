<?php

class EtiquetaFormularioHtml extends IManejadorEtiquetas
{

    public $apertura = "<form>";
    public $elementos = "Página Principal";
    public $cierre = "</form>";
        
    public function __construct() 
    {  
		parent::__construct();
    }
 
      
}

?>

