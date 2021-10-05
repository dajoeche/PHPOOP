<?php

trait MRadioButton
{
    use MPrincipal;

    public $etiquetaRadioButton = "RadioButton";
    public $atributosRadioButton = "Default";
    public $elementosRadioButton = "Default";
    public $nameRadioButton = "Default";

    public function generarRadioButton()
    {
      $this->atributosRadioButton = $this->atributosRadioButton + array("name"=>$this->nameRadioButton);
      $this->configurarNombreObjeto($this->etiquetaRadioButton);
      $this->configurarElementos($this->elementosRadioButton);
      $this->configurarAtributos($this->atributosRadioButton);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>
