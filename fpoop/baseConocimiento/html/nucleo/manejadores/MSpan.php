<?php

trait MSpan
{

    use MPrincipal;

    public $etiquetaSpan = "EtiquetaSpanHtml";
    public $atributosSpan = "Default";
    public $elementosSpan = "Default";

    public function generarSpan()
    {
      $this->configurarNombreObjeto($this->etiquetaSpan);
      $this->configurarElementos($this->elementosSpan);
      $this->configurarAtributos($this->atributosSpan);
      $this->codigoRetorno = $this->generarPrincipal();
    }

}

?>
