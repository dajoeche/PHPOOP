<?php

trait MStyle
{

    use MPrincipal;

    public $etiquetaStyle = "EtiquetaStyleHtml";
    public $atributosStyle = "Default";
    public $elementosStyle = "Default";

    public function generarStyle()
    {
      $this->configurarNombreObjeto($this->etiquetaStyle);
      $this->configurarElementos($this->elementosStyle);
      $this->configurarAtributos($this->atributosStyle);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
