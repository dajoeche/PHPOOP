<?php

trait MIframe
{

    use MPrincipal;

    public $etiquetaIframe = "EtiquetaIframesHtml";
    public $atributosIframe = "Default";
    public $elementosIframe = "Default";

    public function generarIframe()
    {
      $this->configurarNombreObjeto($this->etiquetaIframe);
      $this->configurarElementos($this->elementosIframe);
      $this->configurarAtributos($this->atributosIframe);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
