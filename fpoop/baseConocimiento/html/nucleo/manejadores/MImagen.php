<?php

trait MImagen
{
    use MPrincipal;

    public $etiquetaImagen = "EtiquetaImagenHtml";
    public $atributosImagen = "Default";
    public $elementosImagen = "";

    public function generarImagen()
    {
      $this->configurarNombreObjeto($this->etiquetaImagen);
      $this->configurarElementos($this->elementosImagen);
      $this->configurarAtributos($this->atributosImagen);
      $this->codigoRetorno .= $this->generarPrincipal();
    }

}

?>
