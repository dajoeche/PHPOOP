<?php

class Figure
{

  use MFigure;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarFigure();
    return $this->codigoRetorno;
  }

}

?>
