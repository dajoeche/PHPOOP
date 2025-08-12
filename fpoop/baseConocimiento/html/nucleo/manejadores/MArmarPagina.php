<?php

trait MArmarPagina
{

    use MPrincipal;

    public $html5 = array("EtiquetaHtml5");
  	public $html = "EtiquetaHtml";
  	public $encabezado = "EtiquetaEncabezadoHtml";
  	public $titulo = "EtiquetaTituloHtmlPrincipal";
  	public $meta = "EtiquetaMetaHtmlPrincipal";
  	public $css = "EtiquetaEnlaceCCS";
  	public $js = "EtiquetaEnlaceJS";
  	public $jquery = "EtiquetaEnlaceJQuery";
  	public $style = "_Style";
  	public $body = "EtiquetaCuerpoHtml";
  	public $menu = "DivMenu";
  	public $menu2 = "DivMenu2";
  	public $contenedor = "DivMain";
  	public $espaciador = "DivSpacing";
  	public $pieDePagina = "DivPieDePagina";
  	public $codigoRetorno = "";
  	private $etiquetaObjeto;


    public function generarArmarPagina()
    {
      $this->etiquetaObjeto = new MObjetos();
			$this->etiquetaObjeto->crear($this->html5); 
			$this->etiquetaObjeto->crear($this->html);
			$this->etiquetaObjeto->incrustar($this->encabezado);
			$this->etiquetaObjeto->cambiarEstadoConcatenador();
			$this->etiquetaObjeto->incrustar($this->titulo);
			$this->etiquetaObjeto->incrustar($this->meta);
			$this->etiquetaObjeto->incrustar($this->style);
			$this->etiquetaObjeto->incrustar($this->css);
			$this->etiquetaObjeto->cambiarEstadoConcatenador();
			$this->etiquetaObjeto->incrustar($this->js);
			$this->etiquetaObjeto->agregar($this->jquery);
			$this->etiquetaObjeto->habilitarBody();
			$this->etiquetaObjeto->incrustar($this->body);
			$this->etiquetaObjeto->cambiarEstadoConcatenador();
			$this->etiquetaObjeto->incrustar($this->menu);
			$this->etiquetaObjeto->incrustar($this->menu2);
			$this->etiquetaObjeto->incrustar($this->espaciador);
			$this->etiquetaObjeto->cambiarEstadoConcatenador();
			$this->etiquetaObjeto->incrustar($this->contenedor);			
			$this->etiquetaObjeto->incrustar($this->contenido);
			$this->etiquetaObjeto->cambiarEstadoConcatenador();
			$this->etiquetaObjeto->incrustar($this->pieDePagina);
			$this->codigoRetorno .= $this->etiquetaObjeto->getCodigoRetorno();
    }

}

?>
