<?php

trait MLabel
{
    use MPrincipal;

    public $etiquetaLabel = "EtiquetaLabelHtml";
    public $atributosLabel = "Default";
    public $elementosLabel = "Default";
    public $label = "Default";
    public $forLabel = "";
    public $separador = "";

    public function generarLabel()
    {
      $this->atributosLabel = array("for" => $this->forLabel);
      $this->configurarNombreObjeto($this->etiquetaLabel);
      $this->configurarElementos($this->label);
      $this->configurarAtributos($this->atributosLabel);
      $this->codigoRetorno.=$this->generarPrincipal().$this->separador;
    }

}

?>
