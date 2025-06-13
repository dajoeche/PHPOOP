<?php

trait MArray
{

    public $funcionRetornoExtraerFila = "Default";
    public $funcionRetornoExtraerColumna = "Default";
    public $funcionRetornoIterarArray = "Default";

    public function extraerColumna($fila)
    {
      foreach($fila as $columna){
        call_user_func(array($this, $this->funcionRetornoExtraerColumna),$columna);
      }
    }

    public function configurarFuncionRetornoExtraerColumna($funcionRetornoExtraerColumna)
    {
      $this->funcionRetornoExtraerColumna = $funcionRetornoExtraerColumna;
    }

    public function extraerFila($matriz)
    {
      foreach($matriz as $fila){
		  //print_r($fila);
        call_user_func(array($this, $this->funcionRetornoExtraerFila),$fila);
      }
    }

    public function configurarFuncionRetornoExtraerFila($funcionRetornoExtraerFila)
    {
      $this->funcionRetornoExtraerFila = $funcionRetornoExtraerFila;
    }

    public function iterarArray($matriz)
    {
      array_walk($matriz, array($this, $this->funcionRetornoIterarArray));
    }

    public function configurarFuncionRetornoIterarArray($funcionRetornoIterarArray)
    {
      $this->funcionRetornoIterarArray = $funcionRetornoIterarArray;
    }

    public function limpiarDatosArray($array)
    {
      $this->$array = array();
    }

}

?>
