<?php

class Div
{
    use MDiv;

    public function crear()
    {
      $this->generarDiv();
      return $this->objetoDiv->retornarCodigo();
    }

}

?>
