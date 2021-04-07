<?php

class EtiquetaComentariosHtml extends IManejadorEtiquetas
{

    public $apertura = "<!--";
    public $elementos = "Página Principal";
    public $cierre = "-->";   
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

