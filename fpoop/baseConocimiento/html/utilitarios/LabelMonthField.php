<?php

class LabelMonthField
{
    use MLabel, MMonthField;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarMonthField();
      return $this->codigoRetorno;
    }

}

?>
