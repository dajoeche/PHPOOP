<?php

class _Button
{
    use MButton;

    public $codigoRetorno;

    public function crear()
    {
      $this->generarButton();
      return $this->codigoRetorno;
    }


}

?>
