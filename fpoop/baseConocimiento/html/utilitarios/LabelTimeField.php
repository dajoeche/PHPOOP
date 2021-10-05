<?php

class LabelTimeField
{
    use MLabel, MTimeField;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarTimeField();
      return $this->codigoRetorno;
    }

}

?>
