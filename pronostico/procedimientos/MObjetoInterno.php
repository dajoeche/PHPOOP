<?php

trait MObjetoInterno
{
	use MArray;
	public $objeto;		
	public $nombreObjeto;	
	public $nombreObjetoInterno='enjaulados';	
	public $fecha;	
	public $loteria;	
	public $sorteo;	
	public $tipo;	
	public $animal;	
	public $animal2;	
	public $animal3;	
	public $animal4;	
	public $numeroAnimal;	
	public $combinados;	
	public $ayer;	
	public $funcion;	
	public $variables;	
	public $indice;	
	public $funciones = [
							"objetoSinParametros"=>["variables"=>array()],
							"objetoLoteria"=>["variables"=>array("loteria")],
							"objetoFechaLoteria"=>["variables"=>array("fecha","loteria")],
							"objetoAyerLoteria"=>["variables"=>array("ayer","loteria")],
							"objetoFechaLoteriaAyer"=>["variables"=>array("fecha","loteria","ayer")],
							"objetoLoteriaAnimal"=>["variables"=>array("loteria","animal")],
							"objetoFechaLoteriaAnimal"=>["variables"=>array("fecha","loteria","animal")],
							"objetoFechaLoteriaLimite"=>["variables"=>array("fecha","loteria","limite")],
							"objetoFechaLoteriaAnimalAnimal2"=>["variables"=>array("fecha","loteria","animal","animal2")],
							"objetoFechaLoteriaAnimalAnimal2Animal3"=>["variables"=>array("fecha","loteria","animal","animal2","animal3")],
							"objetoFechaLoteriaAnimalAnimal2Animal3Animal4"=>["variables"=>array("fecha","loteria","animal","animal2","animal3","animal4")],
							"objetoLoteriaSorteo"=>["variables"=>array("loteria","sorteo")],
							"objetoLoteriaAnimalAnimal2"=>["variables"=>array("loteria","animal","animal2")],
							"objetoAyerLoteriaLimite"=>["variables"=>array("ayer","loteria","sorteo","limite")],
							"objetoFechaLoteriaSorteo"=>["variables"=>array("fecha","loteria","sorteo")],
							"objetoFechaLoteriaSorteoLimite"=>["variables"=>array("fecha","loteria","sorteo","limite")],
							"objetoAyerLoteriaSorteo"=>["variables"=>array("ayer","loteria","sorteo")],
							"objetoFechaLoteriaSorteoAnimalLimite"=>["variables"=>array("fecha","loteria","sorteo","animal","limite")],
							"objetoAyerLoteriaSorteoLimite"=>["variables"=>array("ayer","loteria","sorteo","limite")],
						];

    
    public function obtenerCriterio($criterio) {
		$this->setNombreObjeto($criterio['objeto']);
		$this->funcion = $criterio['funcion'];
		$this->ejecutarObjeto();
	 
	}
	
    public function crearInstanciaObjeto() { 
		$this->objeto = new $this->nombreObjeto();

	}
	
    public function imprimir($archivo) {
		echo "<pre>";
		print_r($archivo);				
	}
	
    public function ejecutarObjeto($indice) {
		$this->indice=$indice;
		$this->setObjeto();
		$this->crearInstanciaObjeto();
		$this->inicializarVariables();
		$this->objeto->ejecutar();	
		return 	$this->objeto;	 		
	}
	
    public function setObjeto() {
		//echo $this->criterios[$this->indice]['objeto'].'<br>';
		$this->setNombreObjeto($this->criterios[$this->indice]['objeto']);
		$this->setFuncion($this->criterios[$this->indice]['funcion']);
	
	}

    public function inicializarVariables() {
		$this->configurarFuncionRetornoExtraerArray1("iterarVariables");
		$this->extraerArray1($this->funciones[$this->funcion]['variables']);

	}
	
    public function iterarVariables($variables) {	
		//$this->imprimir($variables);
		$nombreFuncion = "set".ucfirst($variables);
		$this->objeto->$nombreFuncion($this->$variables);		
	}
	
    public function guardarResultados() {
		$this->tabla = $this->objeto->tabla;
	}
				
    public function setFecha($fecha) { $this->fecha = $fecha; }			
    public function setFechaM($fecha) { $this->fecha = $fecha; }			
    public function setAyer($ayer) { $this->fecha = $ayer; }			
    public function setTipo($tipo) { $this->tipo = $tipo; }			
    public function setLoteria($loteria) { $this->loteria = $loteria; }
    public function setSorteo($sorteo) { $this->sorteo = $sorteo; }
    public function setAnimal($animal) { $this->animal = $animal; }
    public function setAnimal2($animal) { $this->animal2 = $animal; }
    public function setAnimal3($animal) { $this->animal3 = $animal; }
    public function setAnimal4($animal) { $this->animal4 = $animal; }
    public function setNumeroAnimal($numeroAnimal) { $this->numeroAnimal = $numeroAnimal; }
    public function setCombinados($combinados) { $this->combinados = $combinados; }
    public function setLimite($limite) { $this->limite = $limite; }
    public function setLimiteSecuencia($limite) { $this->limite = $limite; }
    public function setNombreObjeto($nombreObjeto) { $this->nombreObjeto = $nombreObjeto; }	
    public function setFuncion($funcion) { $this->funcion = $funcion; }	
    	
}
?>
