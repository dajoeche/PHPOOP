<?php

class LabelCajaTextoFecha
{
    use MLabel, MCajaTextoFecha;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarLabel();
      $this->generarCajaTexto();
      return $this->codigoRetorno;
    }

}

?>
