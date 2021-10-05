<?php

class LabelFile
{
    use MLabel, MFile;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarFile();
      return $this->codigoRetorno;
    }

}

?>
