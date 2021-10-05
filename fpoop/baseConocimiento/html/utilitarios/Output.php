<?php

class Output
{

  use MOutput;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarOutput();
    return $this->codigoRetorno;
  }

}

?>
