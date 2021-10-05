<?php

trait MTimeField
{
    use MPrincipal;

    public $etiquetaTimeField = "TimeField";
    public $atributosTimeField = "Default";
    public $elementosTimeField = "Default";

    public function generarTimeField()
    {
      $this->crearTimeField();
    }

    public function crearTimeField()
    {
      $this->configurarNombreObjeto($this->etiquetaTimeField);
      $this->configurarElementos($this->elementosTimeField);
      $this->configurarAtributos($this->atributosTimeField);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
