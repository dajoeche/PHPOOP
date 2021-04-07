<?php

class EtiquetaBaseHtml extends IManejadorEtiquetas
{

    public $apertura = "<base>";
    public $elementos = "Texto del Botón";
    public $cierre = "";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
