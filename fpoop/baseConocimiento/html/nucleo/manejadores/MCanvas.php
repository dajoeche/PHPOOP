<?php

trait MCanvas
{

    use MPrincipal;

    public $etiquetaCanvas = "EtiquetaCanvasHtml";
    public $atributosCanvas = "Default";
    public $elementosCanvas = "Default";

    public function generarCanvas()
    {
      $this->configurarNombreObjeto($this->etiquetaCanvas);
      $this->configurarElementos($this->elementosCanvas);
      $this->configurarAtributos($this->atributosCanvas);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
