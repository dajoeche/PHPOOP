<?php

class TituloParrafoCompuestoFormulario
{
    use MFormulario, MTitulo, MComplemento, MParrafo;

    public $codigoRetorno = "";

    public function  crear()
    {
      $this->crearTituloParrafoFormulario();
      return $this->codigoRetorno;
    }

    public function crearTituloParrafoFormulario()
    {
      $this->generarTitulo();
      $this->generarComplemento();
      $this->generarParrafos();
      $this->generarFormulario();
    }

}

?>
