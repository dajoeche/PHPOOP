<?php


class P_Racha 
{
	use Utilitario, MObjetoInterno, MArray;
	public $sorteo;	
	public $limite;	
	public $animal;	
	public $animalPorSorteo;	
	public $secuencia;	
	public $animales;	
	public $contador=1;
	public $resultadoPorAnimal;	
	public $fechaRacha;	
	public $fechaActual;	
	public $tabla;	

	public $criterios =[
						"buscarAnimales"=>["objeto"=>'M_ResultadosSimple',"funcion"=>'objetoFechaLoteria'],
						"buscarResultadoAnimal"=>["objeto"=>'M_ResultadoPorAnimalFecha',"funcion"=>'objetoFechaLoteriaAnimal'],
					   ];
    function ejecutar() {
		$this->fechaRacha = $this->fecha;
		$this->animales = $this->ejecutarObjeto("buscarAnimales");
		$this->configurarFuncionRetornoExtraerFila("buscarResultadoPorAnimal");
		$this->extraerFila($this->animales->tabla);	
		
	}	

    function buscarResultadoPorAnimal($animal) {
		$this->setAnimal($animal[0]);
		$this->resultadoPorAnimal = $this->ejecutarObjeto("buscarResultadoAnimal");	
		$this->configurarFuncionRetornoExtraerColumna('iterarResultadoAnimal');
		$this->extraerColumna($this->resultadoPorAnimal->tabla);
		if ($this->contador > 0){
			$this->tabla[] = array($this->contador, $this->animal, $this->getAnimal($this->animal));
		}
		
		$this->contador = 1;
		$this->fechaRacha =	$this->fecha;
		if (isset($this->tabla)){
			rsort($this->tabla);
		}
	}
    
    public function iterarResultadoAnimal($resultado) {			
		$this->fechaActual = $resultado[0];
		$this->fechaRacha=$this->getAyer($this->fechaRacha);
		if ($this->fechaActual == $this->fechaRacha){
			
			$this->contador = $this->contador + 1;
		}	
	} 
	 
	
}

?>
