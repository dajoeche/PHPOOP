<?php

class MEnlaces
{

    public $etiquetaEnlace = "EtiquetaEnlacesHtml";
    public $elementosEnlace = "Bloque En Linea";
    public $href = "http://localhost/php/bloqueEnLinea.php";
    public $class = "miEnlace";
    public $atributosEnlace =array();


    function crear()
    {

      $this->etiquetaObjeto = new $this->etiquetaEnlace();
      $this->class === "miEnlace" ? $this->atributosEnlace = array("href"=>$this->href) :  $this->atributosEnlace = array("href"=>$this->href)+array("class"=>$this->class);
      $this->etiquetaObjeto->configurarAtributos($this->atributosEnlace);
      $this->etiquetaObjeto->configurarElementos($this->elementosEnlace);
      $this->etiquetaObjeto->crear();
      $this->codigoRetorno = $this->etiquetaObjeto->retornarCodigo();
      return $this->codigoRetorno;
	  }


    function configurarHref($href)
    {
			$this->href = $href;
		}

    function configurarElementos($elementosEnlace)
    {
			$this->elementosEnlace = $elementos;
		}
}

?>
