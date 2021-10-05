<?php

class LabelURLField
{
    use MLabel, MURLField;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarURLField();
      return $this->codigoRetorno;
    }

}

?>
