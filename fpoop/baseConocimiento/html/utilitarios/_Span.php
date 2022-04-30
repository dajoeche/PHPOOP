<?php

class _Span
{

  use MSpan;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarSpan();
    return $this->codigoRetorno;
  }

}

?>
