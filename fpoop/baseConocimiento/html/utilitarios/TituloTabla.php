<?php

class TituloTabla
{
    use MTitulo, MTabla;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarTitulo();
      $this->generarTabla();
      return $this->codigoRetorno;
    }

}

?>
