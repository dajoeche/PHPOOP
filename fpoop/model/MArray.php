<?php

trait MArray
{

    public $funcionRetornoExtraerArray1 = "Default";
    public $funcionRetornoExtraerArray2 = "Default";
    public $funcionRetornoExtraerFila = "Default";
    public $funcionRetornoExtraerColumna = "Default";
    public $funcionRetornoIterarArray = "Default";

    public function extraerArray1($array1)
    {
      foreach($array1 as $row){
        call_user_func(array($this, $this->funcionRetornoExtraerArray1),$row);
      }
    }

    public function configurarFuncionRetornoExtraerArray1($funcionRetornoExtraerArray1)
    {
      $this->funcionRetornoExtraerArray1 = $funcionRetornoExtraerArray1;
    }

    public function extraerArray2($array2)
    {
      foreach($array2 as $row){
        call_user_func(array($this, $this->funcionRetornoExtraerArray2),$row);
      }
    }

    public function configurarFuncionRetornoExtraerArray2($funcionRetornoExtraerArray2)
    {
      $this->funcionRetornoExtraerArray2 = $funcionRetornoExtraerArray2;
    }

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
