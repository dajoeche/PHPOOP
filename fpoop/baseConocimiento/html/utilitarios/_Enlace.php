<?php

class _Enlace
{

  use MEnlace;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarEnlace();
    return $this->codigoRetorno;
  }

}

?>
