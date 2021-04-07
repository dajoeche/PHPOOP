<?php

class EtiquetaCuerpoHtml extends MEtiquetas
{
    public $apertura = "<body>";
    public $elementos = "*";
    public $cierre = "</body>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
