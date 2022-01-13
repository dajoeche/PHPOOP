<?php

trait MSubmit
{

    use MPrincipal;

    public $etiquetaSubmit = "BotonSubmit";
    public $atributosSubmit = array();
    public $elementosSubmit = "Default";
    public $nombreSubmit = "Default";
    public $codigoSubmit = "";

    public function generarSubmit()
    {
      $this->configurarNombreObjeto($this->etiquetaSubmit);
      $this->configurarElementos($this->elementosSubmit);
      $this->configurarAtributos($this->atributosSubmit + array('value' => $this->nombreSubmit ));
      $this->modoBoton == "ON" ? $this->codigoSubmit = $this->generarPrincipal() : $cd="";
      return $this->codigoSubmit;
    }

}

?>
