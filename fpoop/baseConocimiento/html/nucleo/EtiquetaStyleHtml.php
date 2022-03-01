<?php

class EtiquetaStyleHtml extends MEtiquetas
{

    public $apertura = "<style>";
    public $elementos = "";
    public $atributos = "";
    public $cierre = "</style>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
