<?php

class LabelOptgroup
{
    use MLabel, MOptgroup;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarOptgroup();
      return $this->codigoRetorno;
    }

}

?>
