<?php

trait MVideo
{

    use MPrincipal, MSourceMultimedia;

    public $etiquetaVideo = "EtiquetaVideoHtml";
    public $atributosVideo = "Default";
    public $elementosVideo = "Default";

    public function generarVideo()
    {
      $this->elementosVideo = $this->generarSourceMultimedia().$this->elementosVideo;
      $this->configurarNombreObjeto($this->etiquetaVideo);
      $this->configurarElementos($this->elementosVideo);
      $this->configurarAtributos($this->atributosVideo);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
