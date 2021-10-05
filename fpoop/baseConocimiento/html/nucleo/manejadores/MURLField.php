<?php

trait MURLField
{
    use MPrincipal;

    public $etiquetaURLField = "URLField";
    public $atributosURLField = "Default";
    public $elementosURLField = "Default";

    public function generarURLField()
    {
      $this->crearURLField();
    }

    public function crearURLField()
    {
      $this->configurarNombreObjeto($this->etiquetaURLField);
      $this->configurarElementos($this->elementosURLField);
      $this->configurarAtributos($this->atributosURLField);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
