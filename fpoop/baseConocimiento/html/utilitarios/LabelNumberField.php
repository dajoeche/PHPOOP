<?php

class LabelNumberField
{
    use MLabel, MNumberField;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarNumberField();
      return $this->codigoRetorno;
    }

}

?>
