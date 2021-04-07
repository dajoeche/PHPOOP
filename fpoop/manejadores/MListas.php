<?php

class MListas
{

	  public $tipoLista = "EtiquetaListaVinetaHtml";
		public $etiquetaItemLista = "EtiquetaItemsListaHtml";
		public $items = array();
    public $codigoRetorno="";

    public function __construct()
    {
			$this->crearInstancias();
			$this->crear();
    }

		public function __toString()
  	{
    	return $this->codigoRetorno;
  	}

    function crear()
    {
			$this->crearLista();
			return $this->codigoRetorno;
		}

		function crearLista()
		{
			$this->lista->crear();
			$this->itemLista->configurarItem($this->items);
			$this->itemLista->crear();
			$this->itemLista->envolverItem($this->lista->retornarCodigo());
			$this->codigoRetorno = $this->itemLista."";
		}

		function crearInstancias()
		{
			$this->lista= new $this->tipoLista();
			$this->itemLista= new $this->etiquetaItemLista();
		}
}

?>
