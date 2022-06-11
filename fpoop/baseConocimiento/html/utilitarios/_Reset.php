<?php

class _Reset
{
    use MReset;

    public $codigoRetorno;
    public $modoReset = 'ON';
    public $modoFormulario = 'OFF';

    public function crear()
    {
      $this->generarReset();
      return $this->codigoRetorno;
    }


}

?>
