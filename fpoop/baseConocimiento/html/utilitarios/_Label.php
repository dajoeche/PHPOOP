<?php

class _Label
{
    use MLabel;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      return $this->codigoRetorno;
    }

}

?>
