<?php

class CheckboxLabel
{
    use MLabel, MCheckbox;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarCheckbox();
      $this->generarLabel();
      return $this->codigoRetorno;
    }

}

?>
