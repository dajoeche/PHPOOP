<?php

class DivTitulo
{
    use MDiv, MTitulo;

    public $codigoRetorno = "";


    public function __construct()
    {

    }

    public function crear()
    {
      $this->generarTitulo();
      $this->generarDiv();
      return $this->codigoRetorno;
    }

}

?>
