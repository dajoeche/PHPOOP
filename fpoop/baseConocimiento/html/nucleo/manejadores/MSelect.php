<?php

trait MSelect
{
    use MPrincipal, MOption;

    public $etiquetaSelect = "EtiquetaSelectHtml";
    public $atributosSelect = "Default";
    public $elementosSelect = "Default";

    public function generarSelect()
    {
      $this->elementosSelect = $this->generarOption();
      $this->crearSelect();
    }

    public function crearSelect()
    {
      $this->configurarNombreObjeto($this->etiquetaSelect);
      $this->configurarElementos($this->elementosSelect);
      $this->configurarAtributos($this->atributosSelect);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
