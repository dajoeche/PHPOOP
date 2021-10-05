<?php

class LabelDateTime
{
    use MLabel, MDateTime;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarDateTime();
      return $this->codigoRetorno;
    }

}

?>
