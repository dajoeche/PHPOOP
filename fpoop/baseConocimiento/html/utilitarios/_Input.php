<?php

class _Input
{

  use MInput;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarInput();
    return $this->codigoRetorno;
  }

}

?>
