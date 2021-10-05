<?php

class LabelCajaTexto
{
    use MLabel, MCajaTexto;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarCajaTexto();
      return $this->codigoRetorno;
    }

}

?>
