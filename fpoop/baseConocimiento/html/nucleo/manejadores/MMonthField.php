<?php

trait MMonthField
{
    use MPrincipal;

    public $etiquetaMonthField = "MonthField";
    public $atributosMonthField = "Default";
    public $elementosMonthField = "Default";

    public function generarMonthField()
    {
      $this->crearMonthField();
    }

    public function crearMonthField()
    {
      $this->configurarNombreObjeto($this->etiquetaMonthField);
      $this->configurarElementos($this->elementosMonthField);
      $this->configurarAtributos($this->atributosMonthField);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
