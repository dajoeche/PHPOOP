<?php

class DivTituloSubtitulo
{
    use MDiv, MTitulo, MSubTitulo;

    public function crear()
    {
      $this->generarTitulo();
      $this->generarSubtitulo();
      $this->generarDiv();
      return $this->codigoRetorno;
    }

}

?>
