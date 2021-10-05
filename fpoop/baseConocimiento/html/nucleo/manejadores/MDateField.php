<?php

trait MDateField
{
    use MPrincipal;

    public $etiquetaDateField = "DateField";
    public $atributosDateField = "Default";
    public $elementosDateField = "Default";

    public function generarDateField()
    {
      $this->crearDateField();
    }

    public function crearDateField()
    {
      $this->configurarNombreObjeto($this->etiquetaDateField);
      $this->configurarElementos($this->elementosDateField);
      $this->configurarAtributos($this->atributosDateField);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
