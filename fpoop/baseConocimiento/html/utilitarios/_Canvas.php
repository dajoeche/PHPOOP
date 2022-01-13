<?php

class _Canvas
{

  use MCanvas;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarCanvas();
    return $this->codigoRetorno;
  }

}

?>
