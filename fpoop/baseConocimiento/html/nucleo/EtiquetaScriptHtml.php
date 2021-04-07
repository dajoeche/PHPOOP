<?php

class EtiquetaScriptHtml extends MEtiquetas
{

    public $apertura = "<script>";
    public $elementos = "";
    public $atributosDefecto = array("type"=>"text/javascript", );
    public $atributos = "";
    public $cierre = "</script>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
