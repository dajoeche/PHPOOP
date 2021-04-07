<?php

class EtiquetaItemsListaDescripcionHtml extends MItemListaDescripcion
{

    public $apertura = "<dd>";
    public $elementos = "Página Principal";
    public $cierre = "</dd>";

    public function __construct()
    {
		    parent::__construct();
    }


}

?>
