<?php

class EtiquetaPreformatoHtml extends MEtiquetas
{

    public $apertura = "<pre>";
    public $elementos = "Página Principal";
    public $cierre = "</pre>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
