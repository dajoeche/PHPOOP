<?php

class TituloFormularioParrafo
{
    use MFormulario, MTitulo, MParrafo;

    public $codigoRetorno = "";

    public function  crear()
    {
      $this->crearTituloFormularioParrafo();
      return $this->codigoRetorno;
    }

    public function crearTituloFormularioParrafo()
    {
      $this->generarTitulo();
      $this->generarFormulario();
      $this->generarParrafos();
    }

}

?>
