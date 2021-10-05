<?php

trait MCheckbox
{
    use MPrincipal;

    public $etiquetaCheckbox = "Checkbox";
    public $atributosCheckbox = "Default";
    public $elementosCheckbox = "Default";

    public function generarCheckbox()
    {
      $this->configurarNombreObjeto($this->etiquetaCheckbox);
      $this->configurarElementos($this->elementosCheckbox);
      $this->configurarAtributos($this->atributosCheckbox);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
