<?php

class EtiquetaLinkHtml extends MEtiquetas
{

    public $apertura = "<link>";
    public $elementos = "";
    public $atributosDefecto = array("rel" => "stylesheet");
    public $atributos = "";
    public $cierre = "";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
