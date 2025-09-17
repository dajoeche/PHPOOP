<?php


class P_PruebaEnjauladoDiario 
{
	use Utilitario, MArray;
	
	public $fecha;
	public $ayer;
	public $resultados;
	public $limite=9;
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
		if(count($this->registro)==5){
			$this->contador=$this->contador+1;
			array_unshift($this->registro, $this->contador);
			array_push($this->tabla, $this->registro);
		}	
	}
 		    
    function ajustarFecha() {
		$this->fecha=$this->ayer;
    }   
 			
    public function obtenerResultados() {
		$this->resultados = new M_Resultados(); 
		$this->resultados->setFecha($this->ayer); 
		$this->resultados->setLoteria($this->loteria); 
		$this->resultados->ejecutar();
	}     
 			
    public function obtenerEnjauladoDiario() {
		$this->enjaulado = new M_EnjauladosDiarioLimit(); 
		$this->enjaulado->setFecha($this->ayer); 
		$this->enjaulado->setLoteria($this->loteria); 
		$this->enjaulado->setLimite($this->limite); 
		$this->enjaulado->ejecutar(); 
	}     
 			
    public function comparar() {
		$this->configurarFuncionRetornoExtraerFila("iterarEnjaulado");
		$this->extraerFila($this->enjaulado->tabla);
	}     
 			
    public function iterarEnjaulado($enjaulado) {
		//echo '<pre>';
		//print_r($enjaulado);
		//exit();
		$this->diasSinSalir=$enjaulado[0];
		$this->animalEnjaulado=$enjaulado[1];
		array_push($enjaulado, $this->ayer);
		$this->registro=array($enjaulado[1], $enjaulado[3], $enjaulado[0], $enjaulado[2], $this->ayer);
		$this->configurarFuncionRetornoExtraerColumna("iterarResultado");
		$this->extraerColumna($this->resultados->tabla);
		//echo '<pre>';
		//print_r($this->resultados->tabla);
	}  
 			
    public function iterarResultado($resultado) {
		if ($resultado[1]===$this->animalEnjaulado){ //and $resultado[0]==='16' and $this->diasSinSalir>9
			$this->guardarResultadoTabla();
		}
		//$this->configurarFuncionRetornoExtraerFila("iterarEnjaulado");
		//$this->extraerFila($this->enjaulado->tabla);
	}    
    
}

?>
