<?php

class ManejadorListas extends ManejadorContenedor
{
	public $items;
    public $contenedor;
    public $contenido; 
    public $codigoContenedor;
    public $codigoContenido; 
    public $codigoRetorno;
    	
    function crearCodigoItemLista()
    {
		array_walk($this->items,array($this,'generarCodigoItemLista'));
	}

    function generarCodigoItemLista($item)
    {
		$this->codigoContenido .= new EtiquetaItemsListaHtml($item);
	}
					    	
}

?>
