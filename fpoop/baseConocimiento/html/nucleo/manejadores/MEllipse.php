<?php

trait MEllipse
{

    use MPrincipal;

    public $etiquetaEllipse = "EtiquetaEllipseHtml";
    public $atributosEllipse = "Default";
    public $elementosEllipse = "Default";

    public function generarEllipse()
    {
      $this->configurarNombreObjeto($this->etiquetaEllipse);
      $this->configurarElementos($this->elementosEllipse);
      $this->configurarAtributos($this->atributosEllipse);
      return $this->generarPrincipal();
    }

}

?>
