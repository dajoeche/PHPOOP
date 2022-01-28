<?php

trait MJS
{

    use MPrincipal;

    public $etiquetaJS = "EtiquetaScriptHtml";
    public $atributosJS = "Default";
    public $elementosJS = "Default";

    public function generarJS()
    {
      $this->configurarNombreObjeto($this->etiquetaJS);
      $this->configurarElementos($this->elementosJS);
      $this->configurarAtributos($this->atributosJS);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
