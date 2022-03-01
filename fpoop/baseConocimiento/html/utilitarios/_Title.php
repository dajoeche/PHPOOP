<?php

class _Title
{

  use MTitle;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarTitle();
    return $this->codigoRetorno;
  }

}

?>
