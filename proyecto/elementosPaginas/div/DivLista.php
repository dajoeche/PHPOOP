<?php

class DivLista extends EtiquetaDivHtml
{

    public $elementos = array(
								"EncabezadoSaludo",
								"MiItemsListaDesordenada",
								"SeparadorLineal",
								"EncabezadoDespedida",
								"MiItemsListaOrdenada",
								"SeparadorLineal",
                "EncabezadoListaDescripcion",
                "MiItemsListaDescripcion",
							);

    public function __construct()
    {
		parent::__construct();
    }


}

?>
