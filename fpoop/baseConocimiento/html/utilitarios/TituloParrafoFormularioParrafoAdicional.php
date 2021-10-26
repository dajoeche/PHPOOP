<?php

class TituloParrafoFormularioParrafoAdicional extends TituloParrafoFormulario
{
    use MParrafoAdicional;


    public function  crear()
    {
      $this->crearTituloParrafoFormularioAdicional();
      return $this->codigoRetorno;
    }

    public function crearTituloParrafoFormularioAdicional()
    {
      $this->crearTituloParrafoFormulario();
      $this->generarParrafoAdicional();
    }

}

?>
