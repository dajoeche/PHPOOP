<?php

class EtiquetaItemsListaHtml extends IManejadorEtiquetas
{

    public $apertura = "<li>";
    public $elementos = "Página Principal";
    public $cierre = "</li>";
        
    public function __construct($item) 
    {   $this->elementos = $item;
		parent::__construct();
    }
 
      
}

?>

