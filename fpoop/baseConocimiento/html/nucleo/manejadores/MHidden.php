<?php

trait MHidden
{
    use MPrincipal;

    public $etiquetaHidden = "Hidden";
    public $atributosHidden = "Default";
    public $elementosHidden = "Default";

    public function generarHidden()
    {
      $this->crearHidden();
    }

    public function crearHidden()
    {
      $this->configurarNombreObjeto($this->etiquetaHidden);
      $this->configurarElementos($this->elementosHidden);
      $this->configurarAtributos($this->atributosHidden);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
