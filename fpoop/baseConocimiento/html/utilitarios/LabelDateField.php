<?php

class LabelDateField
{
    use MLabel, MDateField;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarDateField();
      return $this->codigoRetorno;
    }

}

?>
