<?php

class MItemListaDescripcion extends MItemLista
{

    public $tituloLista = "EtiquetaTituloListaDescripcionHtml";
    public $etiquetaItemLista = "EtiquetaItemsListaDescripcionHtml";
		public $tipoLista = "EtiquetaListaDescripcionHtml";
    public $codigoRetorno="";
		public $funcionRetorno = "generarGrupo";

    public function __construct()
    {
			$this->titulo = new $this->tituloLista();
			parent::__construct();
    }


    function generarGrupo($grupo,$valor)
    {
      $this->generarTitulo($grupo["descripcion"]);
		  $this->guardarItem($this->titulo->retornarCodigo());
      $this->recorrerDobleItems($grupo["items"]);
		}

    function generarTitulo($titulo)
    {
		  $this->titulo->configurarElementos($titulo);
      $this->titulo->crear();
		}

    function configurarFuncionRetorno($funcion)
    {
      $this->funcionRetorno2 = $funcion;
		}

    function recorrerDobleItems($item)
    {
			array_walk($item, array($this,"generarItem"));
		}

}

?>
