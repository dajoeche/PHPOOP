<?php

class EtiquetaEncabezadoHtml extends MEtiquetas
{

    public $apertura = "<head>";
    public $elementos = "$*";
    public $cierre = "</head>\n&";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
