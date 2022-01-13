<?php

class TituloParrafoFormulario
{
    use MFormulario, MTitulo, MParrafo;

    public $codigoRetorno = "";

    public function  crear()
    {
      $this->crearTituloParrafoFormulario();
      return $this->codigoRetorno;
    }

    public function crearTituloParrafoFormulario()
    {
      $this->generarTitulo();
      $this->generarParrafos();
      $this->generarFormulario();
    }

}

?>
