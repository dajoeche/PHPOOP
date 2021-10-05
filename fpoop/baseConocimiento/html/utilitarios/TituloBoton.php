<?php

class TituloBoton
{
    use MTitulo, MBoton;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarTitulo();
      $this->generarBoton();
      return $this->codigoRetorno;
    }

}

?>
