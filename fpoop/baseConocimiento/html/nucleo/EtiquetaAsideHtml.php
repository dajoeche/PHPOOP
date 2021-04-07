<?php

class EtiquetaAsideHtml extends IManejadorEtiquetas
{

    public $apertura = "<aside>";
    public $elementos = "Página Principal";
    public $cierre = "</aside>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
