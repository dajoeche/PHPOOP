<?php

class EtiquetaSelectHtml extends MEtiquetas
{

    public $apertura = "<select>";
    public $elementos = "*";
    public $cierre = "</select>";

    public function __construct()
    {
		parent::__construct();
    }

}

?>
