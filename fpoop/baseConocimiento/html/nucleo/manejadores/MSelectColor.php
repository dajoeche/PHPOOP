<?php

trait MSelectColor
{
    use MPrincipal;

    public $etiquetaSelectColor = "SelectColor";
    public $atributosSelectColor = "Default";
    public $elementosSelectColor = "Default";

    public function generarSelectColor()
    {
      $this->crearSelectColor();
    }

    public function crearSelectColor()
    {
      $this->configurarNombreObjeto($this->etiquetaSelectColor);
      $this->configurarElementos($this->elementosSelectColor);
      $this->configurarAtributos($this->atributosSelectColor);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
