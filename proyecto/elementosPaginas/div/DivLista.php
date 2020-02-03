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
								"Saltar2Lineas",
								"EnlacePaginaPrincipal"
							);
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>

