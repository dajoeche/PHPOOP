<?php

class TituloSubtitulo
{
    use MTitulo, MSubTitulo;

    public function crear()
    {
      $this->generarTitulo();
      $this->generarSubtitulo();
      return $this->codigoRetorno;
    }

}

?>
