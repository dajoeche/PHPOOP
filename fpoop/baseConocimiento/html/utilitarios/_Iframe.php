<?php

class _Iframe
{

  use MIframe;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarIframe();
    return $this->codigoRetorno;
  }

}

?>
