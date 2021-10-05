<?php

trait MTextArea
{
    use MPrincipal;

    public $etiquetaTextArea = "EtiquetaTextAreaHtml";
    public $atributosTextArea = "Default";
    public $elementosTextArea = "Default";

    public function generarTextArea()
    {
      $this->configurarNombreObjeto($this->etiquetaTextArea);
      $this->configurarElementos($this->elementosTextArea);
      $this->configurarAtributos($this->atributosTextArea);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
