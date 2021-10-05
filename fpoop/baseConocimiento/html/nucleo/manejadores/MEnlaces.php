<?php

class MEnlaces
{

    public $etiquetaEnlace = "EtiquetaEnlacesHtml";
    public $elementos = "Bloque En Linea";
    public $href = "http://localhost/php/bloqueEnLinea.php";
    public $class = "miEnlace";
    public $atributos =array();


    function crear()
    {

      $this->etiquetaObjeto = new $this->etiquetaEnlace();
      $this->class === "miEnlace" ? $this->atributos = array("href"=>$this->href) :  $this->atributos = array("href"=>$this->href)+array("class"=>$this->class);
      //$this->atributos = array("href"=>$this->href)+array("class"=>$this->class);
      $this->etiquetaObjeto->configurarAtributos($this->atributos);
      $this->etiquetaObjeto->configurarElementos($this->elementos);
      $this->etiquetaObjeto->crear();
      $this->codigoRetorno = $this->etiquetaObjeto->retornarCodigo();
      return $this->codigoRetorno;
	  }


    function configurarHref($href)
    {
			$this->href = $href;
		}

    function configurarElementos($elementos)
    {
			$this->elementos = $elementos;
		}
}

?>
