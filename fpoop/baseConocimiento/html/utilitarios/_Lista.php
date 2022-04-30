<?php

class _Lista
{

  use MLista;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarLista();
    return $this->codigoRetorno;
  }

}

?>
