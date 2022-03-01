<?php

class _CSS
{

  use MCSS;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarCSS();
    return $this->codigoRetorno;
  }

}

?>
