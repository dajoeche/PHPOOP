<?php

class _Tabla
{

  use MTabla;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarTabla();
    return $this->codigoRetorno;
  }

}

?>
