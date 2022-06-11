<?php

class _Formulario
{
    use MFormulario;

    public $codigoRetorno = "";

    public function  crear()
    {
      $this->generarFormulario();
      return $this->codigoRetorno;
    }

}

?>
