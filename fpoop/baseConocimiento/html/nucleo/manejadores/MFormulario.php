<?php

trait MFormulario
{

    use MPrincipal, MSubmit, MReset;

    public $etiquetaFormulario = "EtiquetaFormularioHtml";
    public $atributosFormulario = array("Default");
    public $elementosFormulario = "Default";
    public $codigoRetorno = "";
    public $modoBoton = "ON";
    public $modoReset = "OFF";


    public function generarFormulario()
    {
      $this->configurarCodigoAdicional($this->generarReset());
      $this->configurarCodigoAdicional($this->generarSubmit());
      $this->configurarNombreObjeto($this->etiquetaFormulario);
      $this->configurarElementos($this->elementosFormulario);
      $this->configurarAtributos($this->atributosFormulario);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

    public function desactivarModoBoton()
    {
      $this->modoBoton == "OFF";
    }

    public function desactivarModoReset()
    {
      $this->modoReset == "OFF";
    }
}

?>
