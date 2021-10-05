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
      $this->generarParrafos();
      $this->generarDiv();
      return $this->codigoRetorno;
    }

}

?>
