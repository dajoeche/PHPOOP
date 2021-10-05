<?php

trait MSubmit
{

    use MPrincipal;

    public $etiquetaSubmit = "BotonSubmit";
    public $atributosSubmit = "Default";
    public $elementosSubmit = "Default";
    public $nombreSubmit = "Default";
    public $codigoSubmit = "";

    public function generarSubmit()
    {
      $this->configurarNombreObjeto($this->etiquetaSubmit);
      $this->configurarElementos($this->elementosSubmit);
      $this->configurarAtributos(array('value' => $this->nombreSubmit ));
      $this->modoBoton == "ON" ? $this->codigoSubmit = $this->generarPrincipal() : $cd="";
      return $this->codigoSubmit;
    }

}

?>
