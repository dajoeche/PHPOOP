<?php

trait MText
{

    use MPrincipal;

    public $etiquetaText = "EtiquetaTextHtml";
    public $atributosText = "Default";
    public $elementosText = "Default";

    public function generarText()
    {
      $this->configurarNombreObjeto($this->etiquetaText);
      $this->configurarElementos($this->elementosText);
      $this->configurarAtributos($this->atributosText);
      return $this->generarPrincipal();
    }

}

?>
