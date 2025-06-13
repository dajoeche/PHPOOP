<?php
date_default_timezone_set('America/Caracas');
class Racha
{
  use MArray;
  use Utilitario;
  
  public $itemsTabla;
  public $animal;
  public $loteria;
  public $fechaActual = '*';
  public $fecha;
  public $contador=0;
  public $fechaRacha;
  public $resultadoPorAnimal;
  public $resultado;
  public $tabla;
  public $fila;
  public $bandera='OFF';
 
    function __construct($animal,$loteria,$fecha) {
		$this->animal=$animal;
		$this->loteria=$loteria;
		$this->fecha=$fecha;
		//echo $fecha.'<br>';
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		$this->configurarFuncionRetornoExtraerFila("buscarResultado");
		$this->extraerFila($this->animal);
	
		
		//echo "<pre>";
		//print_r($this->tabla);
		
    }
    
    public function buscarResultado($animal) {
		$date = new DateTime($this->fecha);
		$date->modify("-1 day");
		$this->fechaRacha = $date->format("Y-m-d");
		$this->animal =$animal[0];
		$this->resultadoPorAnimal = new ResultadoPorAnimal($animal[0], $this->loteria, $this->fecha);
		$this->configurarFuncionRetornoExtraerColumna('iterarResultado');
		$this->extraerColumna($this->resultadoPorAnimal->tabla);
		if ($this->contador > 0){
			$this->tabla[] = array($this->contador, $this->animal, $this->getAnimal($this->animal));
		}
		
		
		$this->contador = 0;
		if (isset($this->tabla)){
			rsort($this->tabla);
		}
		
	
	}    
    
    public function iterarResultado($resultado) {
				
		//echo '<pre>.<br>';
		//print_r($resultado[1]);
			$this->fechaActual = $resultado[0];
		//echo ' Fecha Actual : '.$this->fecha.' Feacha Racha: '.$this->fechaRacha.'<br>';
		//echo ' Feacha Racha: '.$this->fechaRacha.'<br>';
		if ($this->fechaActual == $this->fechaRacha){
			$this->contador = $this->contador + 1;
			//echo ' Fecha Actual : '.$this->fechaActual.' Feacha Racha: '.$this->fechaRacha.'Animal: '.$this->animal.'<br>';
		}
		$date = new DateTime($this->fechaRacha);
		$date->modify("-1 day");
		$this->fechaRacha = $date->format("Y-m-d");		

	}    
		

}

?>
