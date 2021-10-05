<?php

class DivTituloParrafoImagen
{
    use MDiv, MTitulo, MParrafo, MImagen;

    public $codigoRetorno = "";

    public function __construct()
    {

    }

    public function crear()
    {
      $this->generarTitulo();
      $this->generarParrafo();
      $this->generarImagen();
      $this->generarDiv();
      return $this->codigoRetorno;
    }

}

?>
