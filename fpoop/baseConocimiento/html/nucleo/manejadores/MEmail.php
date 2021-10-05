<?php

trait MEmail
{
    use MPrincipal;

    public $etiquetaEmail = "Email";
    public $atributosEmail = "Default";
    public $elementosEmail = "Default";

    public function generarEmail()
    {
      $this->crearEmail();
    }

    public function crearEmail()
    {
      $this->configurarNombreObjeto($this->etiquetaEmail);
      $this->configurarElementos($this->elementosEmail);
      $this->configurarAtributos($this->atributosEmail);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
