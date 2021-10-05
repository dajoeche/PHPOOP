<?php

class LabelSelectColor
{
    use MLabel, MSelectColor;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarSelectColor();
      return $this->codigoRetorno;
    }

}

?>
