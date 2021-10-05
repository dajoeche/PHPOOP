<?php

class DivTituloParrafo
{
    use MDiv, MTitulo, MParrafo;

    public $codigoRetorno = "";

    public function  crear()
    {
      $this->crearDivTituloParrafo();
      return $this->codigoRetorno;
    }

    public function crearDivTituloParrafo()
    {
      $this->generarTitulo();
      $this->generarParrafos();
      $this->generarDiv();
    }

}

?>
