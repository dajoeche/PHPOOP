<?php

trait MBSColumna11
{

    public $etiquetaBSColumna11 = "DivBSC_SM_4";
    public $atributosBSColumna11 = "Default";
    public $elementosBSColumna11 = "Default";
    public $codigoRetorno = "";

    public function generarBSColumna11()
    {
      $this->objetoBSColumna11 = new $this->etiquetaBSColumna11();
      $this->objetoBSColumna11->configurarElementos($this->elementosBSColumna11);
      $this->elementosBSFila1 .= $this->objetoBSColumna11->crear();
    }
}

?>
