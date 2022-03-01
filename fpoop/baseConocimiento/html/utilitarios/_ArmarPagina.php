<?php

class _ArmarPagina
{

  use MArmarPagina;

  public $codigoRetorno = "";

  public function __toString()
  {
    return $this->codigoRetorno;
  }

  public function __construct()
  {
    $this->generarArmarPagina();
    return $this->codigoRetorno;
  }

}

?>
