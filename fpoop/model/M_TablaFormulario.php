<?php

trait M_TablaFormulario
{
    use MArray;

    public $estructuraDatos=array();
    public $fila=array();
    public $columna=array();
    public $atributosColumna=array();
    public $controlAlternar="1";

    public function generarEstructuraDatos()
    {
      $this->configurarFuncionRetornoExtraerFila("obtenerColumna");
      $this->extraerFila($this->itemsTabla);
      $this->itemsTabla = $this->fila;
    }

    public function obtenerColumna($fila)
    {
      $this->configurarFuncionRetornoIterarArray("generarAtributosColumna");
      $this->iterarArray($fila);
      $this->guardarColumna();
      $this->limpiarDatosArray("columna");
    }

    public function generarAtributosColumna($columna)
    {
      $this->controlAlternar=="1" ? $this->alternativaUno($columna) : $this->alternativaDos($columna);
    }

    public function alternativaUno($columna)
    {
      $this->cambiarAlternativa("2");
      $this->columna[] = array(array("elemento"=>array($columna), "etiqueta"=>array($this->etiquetaColumna1Tabla)));
    }


    public function alternativaDos($columna)
    {
      $this->cambiarAlternativa("1");
      $this->columna[] = array(array("elemento"=>array($columna), "etiqueta"=>array($this->etiquetaColumna2Tabla)));
    }

    public function cambiarAlternativa($alternativa)
    {
      $this->controlAlternar=$alternativa;
    }

    public function guardarColumna()
    {
      $this->fila[] = $this->columna;
    }

    public function guardaritemsTabla()
    {
      $this->itemsTabla = $this->fila;
    }

}

?>
