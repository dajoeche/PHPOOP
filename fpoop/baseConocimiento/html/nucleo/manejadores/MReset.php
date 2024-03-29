<?php

trait MReset
{

    use MPrincipal;

    public $etiquetaReset = "BotonReset";
    public $atributosReset = "Default";
    public $elementosReset = "Default";
    public $nombreReset = "Default";
    public $codigoReset = "";

    public function generarReset()
    {
      $this->configurarNombreObjeto($this->etiquetaReset);
      $this->configurarElementos($this->elementosReset);
      $this->configurarAtributos(array('value' => $this->nombreReset ));
      if ($this->modoFormulario == "ON") {
        $this->modoReset == "ON" ? $this->codigoReset = $this->generarPrincipal() : $cd="";
        return $this->codigoReset;
      } else {
        $this->codigoRetorno = $this->generarPrincipal();
        return $this->codigoRetorno;        
      }

    }

}

?>
