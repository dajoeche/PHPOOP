<?php

trait MStop
{

    use MPrincipal;

    public $etiquetaStop = "EtiquetaStopHtml";
    public $atributosStop = "Default";
    public $elementosStop = "Default";

    public function generarStop()
    {
      $this->configurarNombreObjeto($this->etiquetaStop);
      $this->configurarElementos($this->elementosStop);
      $this->configurarAtributos($this->atributosStop);
      return $this->generarPrincipal();
    }

}

?>
