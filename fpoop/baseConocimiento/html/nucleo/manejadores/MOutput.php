<?php

trait MOutput
{
    use MPrincipal;

    public $etiquetaOutput = "EtiquetaOutputHtml";
    public $atributosOutput = "Default";
    public $elementosOutput = "Default";

    public function generarOutput()
    {
      $this->configurarNombreObjeto($this->etiquetaOutput);
      $this->configurarElementos($this->elementosOutput);
      $this->configurarAtributos($this->atributosOutput);
      $this->codigoRetorno.=$this->generarPrincipal();
    }
}

?>
