<?php

class _JS
{

  use MJS;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarJS();
    return $this->codigoRetorno;
  }

}

?>
