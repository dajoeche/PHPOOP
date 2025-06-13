<?php

class DiasSinSalirDiario
{
  use Utilitario, MArray;

  public $actual=array();
  public $anterior=array();
  public $sorteo;
  public $dias;
  public $hora;
  public $fila;
  public $tabla;

 
    function __construct($sorteo) {
		$this->sorteo=$sorteo;
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		$this->configurarFuncionRetornoExtraerFila("obtenerDias");
		$this->extraerFila($this->sorteo);
		
    }
        
    public function obtenerDias($animal) { //echo "<pre>";
		
		$this->dias = new ObtenerDiasSinSalirDiario($animal[0], $animal[7], 'LAC');
		
		$animal[]=$this->dias->tabla[0][0];
		$animal[]=$this->dias->tabla[0][1];
		$this->tabla[] = $animal;
    }    

}

?>
