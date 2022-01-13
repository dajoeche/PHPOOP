<?php

trait MComponente
{

    use MPrincipal;

    public $etiquetaComponente = "EtiquetaCircleHtml";
    public $atributosComponente = array();
    public $elementosComponente = "Default";
    public $nombreComponente = "Default";
    public $codigoComponente = "";

    public function generarComponente()
    {
      $this->configurarNombreObjeto($this->etiquetaComponente);
      $this->configurarElementos($this->elementosComponente);
      $this->configurarAtributos($this->atributosComponente);
      $this->codigoComponente = $this->generarPrincipal();
      return $this->codigoComponente;
    }

}

?>
