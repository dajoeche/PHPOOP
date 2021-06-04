<?php

trait MBSContenedor
{

    public $etiquetaBSContenedor = "DivBSContainer";
    public $atributosBSContenedor = "Default";
    public $elementosBSContenedor;
    public $codigoRetorno = "";

    public function generarBSContenedor()
    {
      $this->objetoBSContenedor = new $this->etiquetaBSContenedor();
      $this->objetoBSContenedor->configurarElementos($this->elementosBSContenedor);
      $this->objetoBSContenedor->crear();
    }
}

?>
