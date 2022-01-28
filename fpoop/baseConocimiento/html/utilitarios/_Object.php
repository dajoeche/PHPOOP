<?php

class _Object
{

  use MObject;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarObject();
    return $this->codigoRetorno;
  }

}

?>
