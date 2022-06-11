<?php

trait MButton
{

    use MPrincipal;

    public $etiquetaButton = "Boton";
    public $atributosButton = array();
    public $elementosButton = "Default";
    public $nombreBoton = "Ir";


    public function generarButton()
    {
      $this->atributosButton = $this->atributosButton + array("value" => $this->nombreBoton);
      $this->configurarNombreObjeto($this->etiquetaButton);
      $this->configurarElementos($this->elementosButton);
      $this->configurarAtributos($this->atributosButton);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
