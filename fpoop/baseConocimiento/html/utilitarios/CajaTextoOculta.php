<?php

class CajaTextoOculta
{
    use MHidden;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarHidden();
      return $this->codigoRetorno;
    }

}

?>
