<?php

trait MRangeField
{
    use MPrincipal;

    public $etiquetaRangeField = "RangeField";
    public $atributosRangeField = "Default";
    public $elementosRangeField = "Default";

    public function generarRangeField()
    {
      $this->crearRangeField();
    }

    public function crearRangeField()
    {
      $this->configurarNombreObjeto($this->etiquetaRangeField);
      $this->configurarElementos($this->elementosRangeField);
      $this->configurarAtributos($this->atributosRangeField);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
