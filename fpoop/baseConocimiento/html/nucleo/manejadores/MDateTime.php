<?php

trait MDateTime
{
    use MPrincipal;

    public $etiquetaDateTime = "DateTimeLocal";
    public $atributosDateTime = "Default";
    public $elementosDateTime = "Default";

    public function generarDateTime()
    {
      $this->crearDateTime();
    }

    public function crearDateTime()
    {
      $this->configurarNombreObjeto($this->etiquetaDateTime);
      $this->configurarElementos($this->elementosDateTime);
      $this->configurarAtributos($this->atributosDateTime);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
