<?php

class LabelSelect
{
    use MLabel, MSelect;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarSelect();
      return $this->codigoRetorno;
    }

}

?>
