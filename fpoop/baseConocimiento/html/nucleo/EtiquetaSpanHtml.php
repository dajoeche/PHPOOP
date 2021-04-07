<?php

class EtiquetaSpanHtml extends MEtiquetas
{

    public $apertura = "<span>";
    public $elementos = "*";
    public $cierre = "</span>";

    public function __construct()
    {
		parent::__construct();
    }

}

?>
