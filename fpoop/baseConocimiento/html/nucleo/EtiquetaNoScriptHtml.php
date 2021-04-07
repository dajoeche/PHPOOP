<?php

class EtiquetaNoScriptHtml extends MEtiquetas
{

    public $apertura = "<noscript>";
    public $elementos = "";
    public $atributos = "";
    public $cierre = "</noscript>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
