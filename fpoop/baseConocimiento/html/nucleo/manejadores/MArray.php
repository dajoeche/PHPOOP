<?php

trait MArray
{

    public $funcionRetornoExtraerFila = "Default";
    public $funcionRetornoIterarArray = "Default";

    public function extraerFila($matriz)
    {
      foreach($matriz as $fila){
        call_user_func(array($this, $this->funcionRetornoExtraerFila),$fila);
      }
    }

    public function iterarArray($matriz)
    {
      array_walk($matriz, array($this, $this->funcionRetornoIterarArray));
    }

}

?>
