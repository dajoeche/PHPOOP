<?php

class LabelSearchField
{
    use MLabel, MSearchField;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarSearchField();
      return $this->codigoRetorno;
    }

}

?>
