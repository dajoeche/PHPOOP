<?php

class _CajaTexto
{
    use MCajaTexto;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarCajaTexto();
      return $this->codigoRetorno;
    }

}

?>
