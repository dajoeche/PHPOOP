<?php

trait MFieldset
{
    use MPrincipal, MSelect, MLegend, MSubmit;

    public $etiquetaFieldset = "EtiquetaFieldsetHtml";
    public $atributosFieldset = "Default";
    public $elementosFieldset = "Default";

    public function generarFieldset()
    {
      $this->generarLegend();
      $this->generarSubmit();
      $this->configurarNombreObjeto($this->etiquetaFieldset);
      $this->configurarCodigoAdicional($this->codigoLegend.$this->codigoSubmit);
      $this->configurarElementos($this->elementosFieldset);
      $this->configurarAtributos($this->atributosFieldset);
      $this->codigoRetorno .=$this->generarPrincipal();
    }
  }

?>
