<?php

class _SourceMultimedia
{

  use MSourceMultimedia;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarSourceMultimedia();
    return $this->codigoRetorno;
  }

}

?>
