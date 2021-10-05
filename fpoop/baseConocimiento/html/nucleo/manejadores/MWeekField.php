<?php

trait MWeekField
{
    use MPrincipal;

    public $etiquetaWeekField = "WeekField";
    public $atributosWeekField = "Default";
    public $elementosWeekField = "Default";

    public function generarWeekField()
    {
      $this->crearWeekField();
    }

    public function crearWeekField()
    {
      $this->configurarNombreObjeto($this->etiquetaWeekField);
      $this->configurarElementos($this->elementosWeekField);
      $this->configurarAtributos($this->atributosWeekField);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
