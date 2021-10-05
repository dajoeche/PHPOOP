<?php

class LabelWeekField
{
    use MLabel, MWeekField;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarWeekField();
      return $this->codigoRetorno;
    }

}

?>
