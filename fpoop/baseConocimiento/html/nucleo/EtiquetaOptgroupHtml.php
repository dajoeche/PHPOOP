<?php

class EtiquetaOptgroupHtml extends MEtiquetas
{

    public $apertura = "<optgroup>";
    public $elementos = "*";
    public $cierre = "</optgroup>";

    public function __construct()
    {
		parent::__construct();
    }

}

?>
