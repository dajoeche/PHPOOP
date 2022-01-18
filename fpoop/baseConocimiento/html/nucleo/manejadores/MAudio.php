<?php

trait MAudio
{

    use MPrincipal, MSourceMultimedia;

    public $etiquetaAudio = "EtiquetaAudioHtml";
    public $atributosAudio = "Default";
    public $elementosAudio = "Default";

    public function generarAudio()
    {
      $this->elementosAudio = $this->generarSourceMultimedia().$this->elementosAudio;
      $this->configurarNombreObjeto($this->etiquetaAudio);
      $this->configurarElementos($this->elementosAudio);
      $this->configurarAtributos($this->atributosAudio);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
