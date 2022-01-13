<?php

class TituloImagen
{
    use MTitulo, MImagen;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarTitulo();
      $this->generarImagen();
      return $this->codigoRetorno;
    }

}

?>
