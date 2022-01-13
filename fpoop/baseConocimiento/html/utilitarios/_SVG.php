<?php

class _SVG
{

  use MSVG;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarSVG();
    return $this->codigoRetorno;
  }

}

?>
