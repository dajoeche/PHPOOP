<?php

class EtiquetaHtml extends MEtiquetas
{

    public $apertura = "<html>";
    public $elementos = "$*";
    public $cierre = "</html>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
