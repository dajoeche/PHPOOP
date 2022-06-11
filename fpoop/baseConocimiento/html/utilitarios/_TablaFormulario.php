<?php

class _TablaFormulario
{
    use MTabla, MFormulario;

    public $codigoRetorno = "";
    

    public function  crear()
    {
      $this->generarTabla();
      return $this->codigoRetorno;
    }

    public function generarTabla()
    {
      $this->crearEncabezadoTabla();
      $this->crearFilaTabla();
      $this->elementosFormulario = $this->elementosTabla;
      //print_r($this->objeto);
      $this->generarFormulario();
      $this->elementosTabla = $this->codigoRetorno;
      $this->crearTabla();
      $this->codigoRetorno=$this->generarPrincipal();
    }
}

?>
