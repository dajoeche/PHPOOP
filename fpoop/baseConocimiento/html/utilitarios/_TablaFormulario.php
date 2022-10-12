<?php

class _TablaFormulario
{
    use MTabla, MFormulario, M_TablaFormulario;

    public $codigoRetorno = "";


    public function  crear()
    {
      $this->generarTabla();
      return $this->codigoRetorno;
    }

    public function generarTabla()
    {
      $this->generarEstructuraDatos();
      $this->crearEncabezadoTabla();
      $this->crearFilaTabla();
      $this->elementosFormulario = $this->elementosTabla;
      $this->generarFormulario();
      $this->elementosTabla = $this->codigoRetorno;
      $this->crearTabla();
      $this->codigoRetorno=$this->generarPrincipal();
    }
}

?>
