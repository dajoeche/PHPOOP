<?php

class Fieldset
{

  use MFieldset;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarFieldset();
    return $this->codigoRetorno;
  }

}

?>
