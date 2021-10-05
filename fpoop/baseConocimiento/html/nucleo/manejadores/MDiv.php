<?php

trait MDiv
{
    use MPrincipal;

    public $etiquetaDiv = "EtiquetaDivHtml";
    public $atributosDiv = "Default";
    public $elementosDiv = "Default";
    public $modoCodigoRetorno = "ON";
    public $codigoRetorno = "";

    public function generarDiv()
    {
      $this->configurarNombreObjeto($this->etiquetaDiv);
      $this->modoCodigoRetorno == "ON" ?
                                      $this->configurarElementos($this->codigoRetorno) :
                                      $this->configurarElementos($this->elementosDiv);
      $this->configurarAtributos($this->atributosDiv);
      $this->codigoRetorno = $this->generarPrincipal();
    }

    public function desactivarModoCodigoRetorno()
    {
      $this->modoCodigoRetorno = "OFF";
    }
}

?>
