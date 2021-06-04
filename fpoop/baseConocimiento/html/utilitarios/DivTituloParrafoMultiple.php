<?php

class DivTituloParrafoMultiple
{
    use MDiv, MTitulo, MParrafo;

    public $codigoRetorno = "";


    public function __construct()
    {

    }

    public function crear()
    {
      $this->generar();

      $this->titulo = $this->titulo1;
      $this->parrafo = $this->parrafo1;

      $this->generar();

      $this->titulo = $this->titulo2;
      $this->parrafo = $this->parrafo2;

      $this->generar();
      $this->generarDiv();
      return $this->objetoDiv->retornarCodigo();
    }

    public function generar()
    {
      $this->generarTitulo();
      $this->generarParrafo();
    }
}

?>
