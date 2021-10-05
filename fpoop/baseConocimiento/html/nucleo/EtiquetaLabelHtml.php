<?php

class EtiquetaLabelHtml extends MEtiquetas
{

    public $apertura = "<label>";
    public $elementos = "*";
    public $cierre = "</label>";

    public function __construct()
    {
		  parent::__construct();
    }


}

?>
