<?php

class _Imagen
{
    use MImagen;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarImagen();
      return $this->codigoRetorno;
    }

}

?>
