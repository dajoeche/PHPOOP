<?php

trait MCSS
{

    use MPrincipal;

    public $etiquetaCSS = "EtiquetaLinkHtml";
    public $atributosCSS = "Default";
    public $elementosCSS = "Default";

    public function generarCSS()
    {
      $this->configurarNombreObjeto($this->etiquetaCSS);
      $this->configurarElementos($this->elementosCSS);
      $this->configurarAtributos($this->atributosCSS);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
