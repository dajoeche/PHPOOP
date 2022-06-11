<?php

class _Submit
{
    use MSubmit;

    public $codigoRetorno = "";
    public $modoBoton = 'ON';
    public $modoFormulario = 'OFF';

    public function crear()
    {
      $this->generarSubmit();
      return $this->codigoRetorno;
    }

}

?>
