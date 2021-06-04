<?php

class MItemTabla extends MItemLista
{

    public $tituloLista = "EtiquetaFilaTablaHtml";
    public $etiquetaItemLista = "EtiquetaItemsListaDescripcionHtml";
		public $tipoLista = "EtiquetaListaDescripcionHtml";
    public $codigoRetorno="";
    public $codigoFilas= array();
    public $codigoColumnas = "";
		public $funcionRetorno = "generarGrupo";

    public function __construct()
    {
			$this->titulo = new $this->tituloLista();
			parent::__construct();
    }


    function generarGrupo($grupo)
    {
      array_walk($grupo, array($this,"generarItem"));
      $this->codigoColumnas=implode("",array_unique($this->codigoItem));
      $this->titulo->configurarElementos($this->codigoColumnas);
      $this->titulo->crear();
      $this->codigoItem=array();
      $this->codigoFilas[]=$this->titulo."";
		}

		function envolverItem($etiqueta)
    {
      $this->codigoRetorno=implode("",array_unique($this->codigoFilas));
			$this->etiqueta->setCodigoRetorno($this->codigoRetorno);
		}

}

?>
