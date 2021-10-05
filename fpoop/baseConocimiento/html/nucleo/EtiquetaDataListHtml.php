<?php

class EtiquetaDataListHtml extends MEtiquetas
{
    public $apertura = "<datalist>";
    public $elementos = "*";
    public $cierre = "</datalist>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>
