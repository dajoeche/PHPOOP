<?php


class PruebaEnjauladoDiario 
{
	use Utilitario, MArray;
	
	public $fecha;
	public $ayer;
	public $resultados;
	public $registro;
	public $enjaulado;
	public $diasSinSalir;
	public $animalEnjaulado;
	public $fechaInicio = '2025-01-02';
	public $loteria;
	public $sorteo;
	public $animal;
	public $tabla=array();
	public $M_pruebaSecuenciaSorteo;
    public $animalPorSorteo;
    public $contador=0;
	    
    public function setLoteria($loteria) { $this->loteria = $loteria; }
    public function setFecha($fecha) { $this->fecha = $fecha; }
    		    
    function ejecutar() {
		while ($this->fechaInicio < $this->fecha){
			$this->obtenerDiaAnterior();
			$this->obtenerResultados(); 
			$this->obtenerEnjauladoDiario(); 
			$this->comparar(); 
			$this->ajustarFecha();
		}
    }	
	
    public function guardarResultadoTabla() {
		$this->contador=$this->contador+1;
		if(count($this->registro)==5){
			array_unshift($this->registro, $this->contador);
			array_push($this->tabla, $this->registro);
		}	
	}
 		    
    function ajustarFecha() {
		$this->fecha=$this->ayer;
    }   
 			
    public function obtenerResultados() {
		$this->resultados = new Resultado($this->ayer, $this->loteria); 
	}     
 			
    public function obtenerEnjauladoDiario() {
		$this->enjaulado = new M_EnjauladoDiario($this->ayer, $this->loteria); 
	}     
 			
    public function comparar() {
		$this->configurarFuncionRetornoExtraerFila("iterarEnjaulado");
		$this->extraerFila($this->enjaulado->tabla);
	}     
 			
    public function iterarEnjaulado($enjaulado) {
		$this->diasSinSalir=$enjaulado[2];
		$this->animalEnjaulado=$enjaulado[0];
		array_push($enjaulado, $this->ayer);
		$this->registro=$enjaulado;
		$this->configurarFuncionRetornoExtraerColumna("iterarResultado");
		$this->extraerColumna($this->resultados->tabla);
		//echo '<pre>';
		//print_r($this->resultados->tabla);
	}  
 			
    public function iterarResultado($resultado) {
		//echo '<pre>';
		//print_r();
		if ($resultado[0]===$this->animalEnjaulado and $this->diasSinSalir>9 ){ //and $resultado[0]==='16'
			$this->guardarResultadoTabla();
		}
		//$this->configurarFuncionRetornoExtraerFila("iterarEnjaulado");
		//$this->extraerFila($this->enjaulado->tabla);
	}    
    
}

?>
