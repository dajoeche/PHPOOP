<?php

class DivTituloSubtituloParrafos
{
    use MDiv, MTitulo, MSubTitulo, MParrafo;

    public function crear()
    {
      $this->generarTitulo();
      $this->generarSubtitulo();
      $this->generarParrafos();
      $this->generarDiv();
      return $this->codigoRetorno;
    }

}

?>
