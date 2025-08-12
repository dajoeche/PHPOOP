<?php

class MesAnimal2
{
  use MArray;
  
  public $itemsTabla;
  public $mes;
  public $dia;
  public $animal;
  public $animal2;
  public $resultado;
  public $tabla;
  public $fila;
  public $bandera='OFF';
  public $bandera2='OFF';
 
    function __construct($mes,$resultado, $animal, $animal2) {
		$this->mes=$mes;
		$this->animal=$animal;
		$this->animal2=$animal2;
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
		
		if ($this->dia=="2025-06-21"){
			echo $this->dia." - ".$this->bandera." - ".$this->bandera2."<br>";
		}
		
		if ($this->bandera=='ON' && $this->bandera2=='OFF'){
			$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"amarillo"));
		}
		
		if ($this->bandera=='OFF' && $this->bandera2=='ON'){
			$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"red"));
		}
		
		if ($this->bandera=='ON' && $this->bandera2=='ON'){
			$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"verde"));
		}
		
		if ($this->bandera=='OFF' && $this->bandera2=='OFF'){
			$this->fila[] = substr($this->dia,-2);	
		}	
		
		if ($this->bandera=='RE' && $this->bandera2=='OFF'){
			$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"gris"));	
		}		
		
		if ($this->bandera=='OFF' && $this->bandera2=='RE'){ 
			$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"aqua"));	
		}		
		
		if ($this->bandera=='RE' && $this->bandera2=='ON'){
			$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"mora"));	
		}		
		
		if ($this->bandera=='ON' && $this->bandera2=='RE'){ 
			$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"marron"));	
		}		
			
		$this->bandera='OFF';
		$this->bandera2='OFF';
		

	}    

    
    public function iterarResultado($resultado) {

		if ($this->dia==$resultado[1]  && $resultado[2]=== $this->animal){
			if($this->bandera=='ON'  && $resultado[2]=== $this->animal){
				$this->bandera='RE';
			} elseif ($this->bandera='OFF' && $resultado[2]=== $this->animal) {
				$this->bandera='ON';
			}	
		}
		
		if ($this->dia==$resultado[1] && $resultado[2]=== $this->animal2){
			//echo $resultado[1].'<br>';
			if($this->bandera2=='ON' && $resultado[2]=== $this->animal2){
				$this->bandera2='RE';
			} elseif ($this->bandera2='OFF' && $resultado[2]=== $this->animal2) {
				$this->bandera2='ON';
			}	
		}
	
	}   
		

}

?>
