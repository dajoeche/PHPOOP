<?php

class _Video
{

  use MVideo;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarVideo();
    return $this->codigoRetorno;
  }

}

?>
