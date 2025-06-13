<?php

class PrimerSorteo
{
  use MArray;
  
  public $itemsTabla;
  public $mes;
  public $dia;
  public $hoy;
  public $animalHoy;
  public $manana;
  public $resultado;
  public $salio="OFF";
  public $contador=0;
  public $tabla;
  public $fila;
  public $columna=array();
  public $bandera='OFF';
 
 /*   function __construct() { //$hoy,$manana
		$this->hoy=$hoy;
		$this->manana=$manana;
		$this->crearObjeto();		      
    }  */

	function setHoy($hoy) {$this->hoy = $hoy;}
	function setManana($manana) {$this->manana = $manana;}
     
    public function comparar() {
		
		$this->configurarFuncionRetornoExtraerFila("iterarHoy");
		$this->extraerFila($this->hoy);
		if($this->salio=="ON"){ 
			$this->tabla[]=$this->columna;
			$this->columna=array();
			
		}
		$this->salio="OFF";
		//echo "<pre>";
		//print_r($this->hoy);
		
    }
    
    public function iterarHoy($today) {
		//$this->configurarFuncionRetornoExtraerColumna('iterarSemana');
		//$this->extraerColumna($semana);
		//echo '<pre>';
		//print_r($this->manana[0][0]);
		if (isset($this->manana[0][0])){
			$this->animalHoy = $today[0];
			
			if($today[0]==$this->manana[0][0]){
				$this->salio = "ON";
				//echo $today[0].' - '.$this->manana[0][0].' - '.$today[5].'<br>';
				$this->tabla[] = array($today[0],$today[1],$today[5],$today[3]);
				$this->contador=$this->contador+1;
			}
		}
		
		//echo $today.'<br>';
		//$this->tabla[] = $this->fila;
		//$this->fila=array();
	
	}      
		

}

?>
