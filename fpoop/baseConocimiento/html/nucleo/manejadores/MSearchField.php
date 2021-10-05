<?php

trait MSearchField
{
    use MPrincipal;

    public $etiquetaSearchField = "SearchField";
    public $atributosSearchField = "Default";
    public $elementosSearchField = "Default";

    public function generarSearchField()
    {
      $this->crearSearchField();
    }

    public function crearSearchField()
    {
      $this->configurarNombreObjeto($this->etiquetaSearchField);
      $this->configurarElementos($this->elementosSearchField);
      $this->configurarAtributos($this->atributosSearchField);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
