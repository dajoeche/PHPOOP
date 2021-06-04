<?php

trait MImagen
{

    public $etiquetaImagen = "EtiquetaImagenHtml";
    public $atributosImagen = "Default";
    public $elementosImagen = "";

    public function generarImagen()
    {
      $this->objetoImagen = new $this->etiquetaImagen();
      $this->objetoImagen->configurarElementos($this->elementosImagen);
      $this->objetoImagen->configurarAtributos($this->atributosImagen);
      $this->codigoRetorno .= $this->objetoImagen->crear();
    }

}

?>
