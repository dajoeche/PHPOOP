<?php

trait MSourceMultimedia
{

    use MPrincipal;

    public $etiquetaSourceMultimedia = "EtiquetaSourceMultimediaHtml";
    public $atributosSourceMultimedia = "Default";
    public $elementosSourceMultimedia = "Default";

    public function generarSourceMultimedia()
    {
      $this->configurarNombreObjeto($this->etiquetaSourceMultimedia);
      $this->configurarElementos($this->elementosSourceMultimedia);
      $this->configurarAtributos($this->atributosSourceMultimedia);
      return $this->generarPrincipal();
    }

}

?>
