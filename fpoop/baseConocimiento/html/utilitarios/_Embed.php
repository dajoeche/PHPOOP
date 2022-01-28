<?php

class _Embed
{

  use MEmbed;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarEmbed();
    return $this->codigoRetorno;
  }

}

?>
