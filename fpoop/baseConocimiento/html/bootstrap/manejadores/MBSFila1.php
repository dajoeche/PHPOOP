<?php

trait MBSFila1
{

    public $etiquetaBSFila1 = "DivBSRow";
    public $atributosBSFila1 = "Default";
    public $elementosBSFila1;
    public $codigoRetorno = "";

    public function generarBSFila1()
    {
      $this->objetoBSFila1 = new $this->etiquetaBSFila1();
      $this->objetoBSFila1->configurarElementos($this->elementosBSFila1);
      $this->elementosBSContenedor .= $this->objetoBSFila1->crear();
    }
}

?>
