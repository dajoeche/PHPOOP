<?php

class DiasSinSalirDiario
{
  use Utilitario, MArray;

  public $actual=array();
  public $anterior=array();
  public $sorteo;
  public $loteria;
  public $contador=0;
  public $dias;
  public $hora;
  public $fila;
  public $tabla;

 
    function __construct($sorteo, $loteria) {
		$this->sorteo=$sorteo;
		$this->loteria=$loteria;
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		$this->configurarFuncionRetornoExtraerFila("obtenerDias");
		$this->extraerFila($this->sorteo);
		
    }
        
    public function obtenerDias($animal) { //echo "<pre>"; print_r($animal);
		
		$this->dias = new ObtenerDiasSinSalirDiario($animal[0], $animal[7], $this->loteria);
		
		if($this->dias->tabla[0][0]){
			$this->contador=$this->contador+1;
			array_unshift($animal, $this->contador);
			$animal[]=$this->dias->tabla[0][0];
			$animal[]=$this->dias->tabla[0][1];
			$this->tabla[] = $animal;			
		}
			/*$this->contador=$this->contador+1;
			array_unshift($animal, $this->contador);
			$animal[]=$this->dias->tabla[0][0];
			$animal[]=$this->dias->tabla[0][1];
			$this->tabla[] = $animal;*/
    }    

}

?>
