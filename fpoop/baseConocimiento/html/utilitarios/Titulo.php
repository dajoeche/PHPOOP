<?php

class Titulo
{
    use MTitulo;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarTitulo();
      return $this->codigoRetorno;
    }

}

?>
