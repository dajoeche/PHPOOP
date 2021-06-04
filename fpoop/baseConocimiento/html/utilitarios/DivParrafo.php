<?php

class DivParrafo
{
    use MDiv, MParrafo;

    public $codigoRetorno = "";


    public function __construct()
    {

    }

    public function crear()
    {
      $this->generarParrafo();
      $this->generarDiv();
      return $this->objetoDiv->retornarCodigo();
    }

}

?>
