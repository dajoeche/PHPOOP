<?php

class _Stop
{

  use MStop;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarStop();
    return $this->codigoRetorno;
  }

}

?>
