<?php

trait MInput
{
    use MPrincipal;

    public $etiquetaInput = "EtiquetaEntradaHtml";
    public $atributosInput = "Default";
    public $elementosInput = "Default";

    public function generarInput()
    {
      $this->configurarNombreObjeto($this->etiquetaInput);
      $this->configurarElementos($this->elementosInput);
      $this->configurarAtributos($this->atributosInput);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
