<?php

class EtiquetaDetailsHtml extends IManejadorEtiquetas
{

    public $apertura = "<details>";
    public $elementos = "Página Principal";
    public $cierre = "</details>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
