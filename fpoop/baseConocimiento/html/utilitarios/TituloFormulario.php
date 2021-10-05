<?php

class TituloFormulario
{
    use MFormulario, MTitulo;

    public $codigoRetorno = "";

    public function  crear()
    {
      $this->crearTituloFormulario();
      return $this->codigoRetorno;
    }

    public function crearTituloFormulario()
    {
      $this->generarTitulo();
      $this->generarFormulario();
    }

}

?>
