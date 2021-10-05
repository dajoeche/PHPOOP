<?php

class LabelTelephoneField
{
    use MLabel, MTelephoneField;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarTelephoneField();
      return $this->codigoRetorno;
    }

}

?>
