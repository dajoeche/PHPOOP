<?php

trait MNumberField
{
    use MPrincipal;

    public $etiquetaNumberField = "NumberField";
    public $atributosNumberField = "Default";
    public $elementosNumberField = "Default";

    public function generarNumberField()
    {
      $this->crearNumberField();
    }

    public function crearNumberField()
    {
      $this->configurarNombreObjeto($this->etiquetaNumberField);
      $this->configurarElementos($this->elementosNumberField);
      $this->configurarAtributos($this->atributosNumberField);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
