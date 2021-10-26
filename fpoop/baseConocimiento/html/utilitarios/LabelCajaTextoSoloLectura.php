<?php

class LabelCajaTextoSoloLectura
{
    use MLabel, MCajaTextoSoloLectura;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarCajaTexto();
      return $this->codigoRetorno;
    }

}

?>
