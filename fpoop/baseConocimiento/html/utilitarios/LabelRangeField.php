<?php

class LabelRangeField
{
    use MLabel, MRangeField;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarRangeField();
      return $this->codigoRetorno;
    }

}

?>
