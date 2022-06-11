<?php

trait MSubmit
{

    use MPrincipal;

    public $etiquetaSubmit = "BotonSubmit";
    public $atributosSubmit = array();
    public $elementosSubmit = "Default";
    public $nombreSubmit = "Submit";
    public $codigoSubmit = "";

    public function generarSubmit()
    {
      $this->configurarNombreObjeto($this->etiquetaSubmit);
      $this->configurarElementos($this->elementosSubmit);
      $this->configurarAtributos($this->atributosSubmit + array('value' => $this->nombreSubmit ));
      if ($this->modoFormulario == "ON") {
        $this->modoBoton == "ON" ? $this->codigoSubmit = $this->generarPrincipal() : $this->codigoSubmit="";
        return $this->codigoSubmit;
      } else {
        $this->codigoRetorno = $this->generarPrincipal();
        return $this->codigoRetorno;
      }

    }

}

?>
