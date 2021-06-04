<?php

trait MDiv
{

    public $etiquetaDiv = "EtiquetaDivHtml";
    public $atributosDiv = array("Default");
    public $elementosDiv = "Default";
    public $codigoRetorno = "";

    public function generarDiv()
    {
      $this->objetoDiv = new $this->etiquetaDiv();
      $this->codigoRetorno=="" ? $this->codigoRetorno = $this->elementosDiv : $cd = "";
      $this->objetoDiv->configurarElementos($this->codigoRetorno);
      in_array("Default", $this->atributosDiv) ?  $cd = "" : $this->objetoDiv->configurarAtributos($this->atributosDiv);
      $this->objetoDiv->crear();
    }
}

?>
