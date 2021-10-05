<?php

trait MTelephoneField
{
    use MPrincipal;

    public $etiquetaTelephoneField = "TelephoneField";
    public $atributosTelephoneField = "Default";
    public $elementosTelephoneField = "Default";

    public function generarTelephoneField()
    {
      $this->crearTelephoneField();
    }

    public function crearTelephoneField()
    {
      $this->configurarNombreObjeto($this->etiquetaTelephoneField);
      $this->configurarElementos($this->elementosTelephoneField);
      $this->configurarAtributos($this->atributosTelephoneField);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
