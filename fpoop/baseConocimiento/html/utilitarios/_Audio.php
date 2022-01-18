<?php

class _Audio
{

  use MAudio;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarAudio();
    return $this->codigoRetorno;
  }

}

?>
