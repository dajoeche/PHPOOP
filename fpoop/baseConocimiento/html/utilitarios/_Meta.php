<?php

class _Meta
{

  use MMeta;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarMeta();
    return $this->codigoRetorno;
  }

}

?>
