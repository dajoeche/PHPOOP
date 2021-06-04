<?php

trait MBSColumna12
{

    public $etiquetaBSColumna12 = "DivBSC_SM_4";
    public $atributosBSColumna12 = "Default";
    public $elementosBSColumna12 = "Default";
    public $codigoRetorno = "";

    public function generarBSColumna12()
    {
      $this->objetoBSColumna12 = new $this->etiquetaBSColumna12();
      $this->objetoBSColumna12->configurarElementos($this->elementosBSColumna12);
      $this->elementosBSFila1 .= $this->objetoBSColumna12->crear();
    }
}

?>
