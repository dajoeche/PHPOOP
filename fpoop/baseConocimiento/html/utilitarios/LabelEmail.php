<?php

class LabelEmail
{
    use MLabel, MEmail;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarEmail();
      return $this->codigoRetorno;
    }

}

?>
