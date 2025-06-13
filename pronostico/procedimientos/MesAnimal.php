<?php

class MesAnimal
{
  use MArray;
  
  public $itemsTabla;
  public $mes;
  public $dia;
  public $resultado;
  public $tabla;
  public $fila;
  public $bandera='OFF';
 
    function __construct($mes,$resultado) {
		$this->mes=$mes;
		$this->resultado=$resultado;
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		$this->configurarFuncionRetornoExtraerFila("iterarMes");
		$this->extraerFila($this->mes);
		//echo "<pre>";
		//print_r($this->tabla);
		
    }
    
    public function iterarMes($semana) {
		$this->configurarFuncionRetornoExtraerColumna('iterarSemana');
		$this->extraerColumna($semana);
		//echo '<pre>';
		//print_r($semana);
		//echo $dias.'<br>';
		$this->tabla[] = $this->fila;
		$this->fila=array();
	
	}    
    
    public function iterarSemana($dia) {
		//$this->configurarFuncionRetornoExtraerColumna($semana);
		//echo '<pre>';
		//print_r($dia);
		$this->dia=$dia;
		$this->configurarFuncionRetornoIterarArray('iterarResultado');
		$this->iterarArray($this->resultado);
		
		if ($this->bandera=='ON'){
		   $this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"amarillo"));
			
		} elseif($this->bandera=='RE') {
			$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"gris"));
		} else {
			$this->fila[] = substr($this->dia,-2);
		}	
			
		$this->bandera='OFF';
		

	}    

    
    public function iterarResultado($resultado) {
		//echo '<pre>';
		//print_r($semana);
		if ($this->dia==$resultado[1]){
			//echo $resultado[1].'<br>';
			if($this->bandera=='ON'){
				$this->bandera='RE';
			} elseif ($this->bandera='OFF') {
				$this->bandera='ON';
			}	
		}
	
	}   
		

}

?>
