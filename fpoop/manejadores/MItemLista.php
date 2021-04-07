<?php

class MItemLista extends MEtiquetas
{

		public $itemLista = "EtiquetaItemsListaHtml";
    public $codigoRetorno="";
		public $funcionRetorno="generarItem";
		public $codigoItem=array();
		public $item="";

    public function __construct()
    {
		parent::__construct();
    }

		public function __toString()
  	{
    	return $this->codigoRetorno;
  	}

		function crear()
    {
			$this->crearItem();
		}

    function crearItem()
    {
			$this->recorrerItems($this->item);
			$this->generarCodigoRetorno();
		}

    function recorrerItems($item)
    {
			array_walk($item, array($this,$this->funcionRetorno));
		}

    function generarCodigoRetorno()
    {
			$this->codigoRetorno=implode("",array_unique($this->codigoItem));
		}

    function generarItem($item)
    {
			$this->gestionarEtiqueta($item);
			$this->guardarItem($this->retornarCodigo());
		}

    function gestionarEtiqueta($item)
    {
			$this->configurarElementos($item);
			$this->crearEtiqueta();
		}

    function guardarItem($item)
    {
			$this->codigoItem[]=$item;
		}

    function configurarElementos($item)
    {
			$this->elementos=$item;
		}

    function configurarItem($item)
    {
			$this->item=$item;
		}

		function envolverItem($etiqueta)
    {
			$this->agregarEtiqueta($etiqueta);
			$this->guardarCodigoRetorno();
		}

		function agregarEtiqueta($etiqueta)
    {
			$this->codigoRetorno = str_replace("*",$this->codigoRetorno,$etiqueta);
		}

		function guardarCodigoRetorno()
    {
			$this->etiqueta->setCodigoRetorno($this->codigoRetorno);
		}

}

?>
