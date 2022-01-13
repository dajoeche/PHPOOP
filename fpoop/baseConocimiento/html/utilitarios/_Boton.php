<?php

class _Boton
{
    use MBoton;

    public $codigoRetorno;

    public function crear()
    {
      $this->generarBoton();
      return $this->codigoRetorno;
    }


}

?>
