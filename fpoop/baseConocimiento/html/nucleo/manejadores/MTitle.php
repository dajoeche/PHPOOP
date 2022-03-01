<?php

trait MTitle
{

    use MPrincipal;

    public $etiquetaTitle = "EtiquetaTituloHtml";
    public $atributosTitle = "Default";
    public $elementosTitle = "Default";

    public function generarTitle()
    {
      $this->configurarNombreObjeto($this->etiquetaTitle);
      $this->configurarElementos($this->elementosTitle);
      $this->configurarAtributos($this->atributosTitle);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
