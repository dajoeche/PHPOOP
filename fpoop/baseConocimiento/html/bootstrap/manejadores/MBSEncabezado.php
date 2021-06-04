<?php

trait MBSEncabezado
{

    public $etiquetaBSEncabezado = "DivBSJumbotron";
    public $atributosBSEncabezado = "Default";
    public $elementosBSEncabezado = "Default";
    public $codigoRetorno = "";

    public function generarBSEncabezado()
    {
      $this->objetoBSEncabezado = new $this->etiquetaBSEncabezado();
      $this->objetoBSEncabezado->configurarElementos($this->elementosBSEncabezado);
      $this->objetoBSEncabezado->configurarAtributos($this->atributosBSEncabezado);
      $this->elementosBSContenedor .= $this->objetoBSEncabezado->crear();
    }
}

?>
