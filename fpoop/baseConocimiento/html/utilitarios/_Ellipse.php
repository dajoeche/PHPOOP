<?php

class _Ellipse
{

  use MEllipse;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarEllipse();
    return $this->codigoRetorno;
  }

}

?>
