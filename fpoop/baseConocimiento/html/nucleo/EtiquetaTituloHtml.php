<?php

class EtiquetaTituloHtml extends MEtiquetas
{

    public $apertura = "<title>";
    public $elementos = "Página Principal";
    public $cierre = "</title>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
