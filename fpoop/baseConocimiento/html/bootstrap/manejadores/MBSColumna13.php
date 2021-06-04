<?php

trait MBSColumna13
{

    public $etiquetaBSColumna13 = "DivBSC_SM_4";
    public $atributosBSColumna13 = "Default";
    public $elementosBSColumna13 = "Default";
    public $codigoRetorno = "";

    public function generarBSColumna13()
    {
      $this->objetoBSColumna13 = new $this->etiquetaBSColumna13();
      $this->objetoBSColumna13->configurarElementos($this->elementosBSColumna13);
      $this->elementosBSFila1 .= $this->objetoBSColumna13->crear();
    }
}

?>
