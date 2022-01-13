<?php

trait MLinearGradient
{

    use MPrincipal;

    public $etiquetaLinearGradient = "EtiquetaLinearGradientHtml";
    public $atributosLinearGradient = "Default";
    public $elementosLinearGradient = "Default";

    public function generarLinearGradient()
    {
      $this->configurarNombreObjeto($this->etiquetaLinearGradient);
      $this->configurarElementos($this->elementosLinearGradient);
      $this->configurarAtributos($this->atributosLinearGradient);
      return $this->generarPrincipal();
    }

}

?>
