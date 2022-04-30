<?php

trait MEnlace
{

    use MPrincipal;

    public $etiquetaEnlace = "EtiquetaEnlacesHtml";
    public $elementosEnlace = "Bloque En Linea";
    public $href = "http://localhost/php/bloqueEnLinea.php";
    public $class = "miEnlace";
    public $atributosEnlace = "Default";


    function generarEnlace()
    { 
      $this->atributosEnlace === "Default" ? $this->atributosEnlace = array("href"=>$this->href) :  $this->atributosEnlace = array("href"=>$this->href)+$this->atributosEnlace;
      $this->configurarNombreObjeto($this->etiquetaEnlace);
      $this->configurarElementos($this->elementosEnlace);
      $this->configurarAtributos($this->atributosEnlace);
      $this->codigoRetorno=$this->generarPrincipal();
	  }
}

?>
