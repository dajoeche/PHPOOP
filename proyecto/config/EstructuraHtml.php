<?php

class EstructuraHtml
{

	public $html5 = array("EtiquetaHtml5");
	public $html = "EtiquetaHtml";
	public $encabezado = "EtiquetaEncabezadoHtml";
	public $titulo = "EtiquetaTituloHtmlPrincipal";
	public $meta = "EtiquetaMetaHtmlPrincipal";
	public $css = "EtiquetaEnlaceCCS";
	public $js = "EtiquetaEnlaceJS";
	public $body = "EtiquetaCuerpoHtml";
	public $menu = "DivMenu";
	public $pieDePagina = "DivPieDePagina";
	public $codigoRetorno = "";


    public function __construct()
    {
			$this->etiquetaObjeto = new MObjetos();
			$this->crearEstructuraHtml();
    }

		public function __toString()
  	{
    	return $this->codigoRetorno;
  	}

		public function crearEstructuraHtml()
    {
			$this->etiquetaObjeto->crear($this->html5);
			$this->etiquetaObjeto->crear($this->html);
			$this->etiquetaObjeto->incrustar($this->encabezado);
			$this->etiquetaObjeto->cambiarEstadoConcatenador();
			$this->etiquetaObjeto->incrustar($this->titulo);
			$this->etiquetaObjeto->incrustar($this->meta);
			$this->etiquetaObjeto->incrustar($this->css);
			$this->etiquetaObjeto->cambiarEstadoConcatenador();
			$this->etiquetaObjeto->incrustar($this->js);
			$this->etiquetaObjeto->habilitarBody();
			$this->etiquetaObjeto->incrustar($this->body);
			$this->etiquetaObjeto->cambiarEstadoConcatenador();
			$this->etiquetaObjeto->incrustar($this->menu);
			$this->etiquetaObjeto->incrustar($this->contenido);
			$this->etiquetaObjeto->cambiarEstadoConcatenador();
			$this->etiquetaObjeto->incrustar($this->pieDePagina);
			$this->codigoRetorno .= $this->etiquetaObjeto->getCodigoRetorno();
  	}

}

?>
