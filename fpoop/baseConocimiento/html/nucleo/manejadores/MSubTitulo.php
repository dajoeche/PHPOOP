<?php

trait MSubTitulo
{

    public $etiquetaSubtitulo = "EtiquetaH3Html";
    public $atributosSubtitulo = "Default";
    public $elementosSubtitulo = "Default";
    public $subtitulo = "Resize the browser window";
    private $objetoSubtitulo;
    
    public function generarSubtitulo()
    {
      $this->objetoSubtitulo = new $this->etiquetaSubtitulo();
      $this->objetoSubtitulo->configurarElementos($this->subtitulo);
      $this->objetoSubtitulo->configurarAtributos($this->atributosSubtitulo);
      $this->codigoRetorno .= $this->objetoSubtitulo->crear();
    }

}

?>
