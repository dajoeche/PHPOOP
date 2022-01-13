<?php

class _Text
{

  use MText;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarText();
    return $this->codigoRetorno;
  }

}

?>
