<?php

class MTablas extends MListaDescripcion
{
		public $etiquetaCaption = "EtiquetaCaptionTablaHtml";
		public $etiquetaEncabezado = "EtiquetaEncabezadoTablaHtml";
		public $etiquetaColumna = "EtiquetaColumnaTablaHtml";
		public $etiquetaItemLista = "EtiquetaColumnaTablaHtml";
		public $tipoLista = "EtiquetaTablaHtml";
		public $encabezadoTabla =  array(array("Company", "Contact", "Country"));
	  public $itemsTabla =  array(
                                    array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                                    array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
																	  array("Ernst Handel","Roland Mendel", "Austria"),
																	  array("Island Trading","Helen Bennett", "UK"),
																	  array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
																	  array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                   );

    public function __construct()
    {
			$this->caption = new $this->etiquetaCaption();
      parent::__construct();

    }

    function crear()
    {
			$this->generarEncabezado();
			$this->generarItemTabla();
			$this->generarCaption();
			$this->generarTabla();
			$this->guardarCodigoRetorno();
			return $this->codigoRetorno;
		}

    function generarEncabezado()
    {
			$this->configurarEncabezado();
			$this->generar();
			$this->guardarCodigoEncabezado();
		}

    function generarItemTabla()
    {
			$this->configurarItemTabla();
			$this->generar();
			$this->guardarItemTabla();
		}

    function generarCaption()
    {
			$this->caption->configurarElementos($this->captionTabla);
			$this->caption->crear();
		}

    function generarTabla()
    {
			$this->lista->configurarElementos($this->unirCodigoParcial());
			$this->lista->crear();
		}

		function configurarEncabezado()
    {
			$this->configurarEtiquetaItem($this->etiquetaEncabezado);
			$this->configurarItems($this->encabezadoTabla);
		}

		function configurarItemTabla()
    {
			$this->configurarEtiquetaItem($this->etiquetaColumna);
			$this->configurarItems($this->itemsTabla);
		}

    function generar()
    {
			$this->crearInstancias();
			$this->crearLista();
		}

		function guardarCodigoEncabezado()
    {
			$this->codigoEncabezado = $this->codigoRetorno;
		}

		function guardarItemTabla()
    {
			$this->codigoTabla = $this->codigoRetorno;
		}

		function guardarCodigoRetorno()
    {
			$this->codigoRetorno = $this->lista;
		}

		function configurarEtiquetaItem($etiquetaItem)
    {
			$this->etiquetaItemLista = $etiquetaItem;
		}

		function configurarItems($item)
    {
			$this->items = $item;
		}

		function unirCodigoParcial()
    {
			return $this->caption.$this->codigoEncabezado.$this->codigoTabla;
		}

}

?>
