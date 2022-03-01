<?php

class _Style
{

  use MStyle;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarStyle();
    return $this->codigoRetorno;
  }

}

?>
