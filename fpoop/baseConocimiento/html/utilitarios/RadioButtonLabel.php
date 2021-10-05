<?php

class RadioButtonLabel
{
    use MLabel, MRadioButton;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarRadioButton();  
      $this->generarLabel();
      return $this->codigoRetorno;
    }

}

?>
