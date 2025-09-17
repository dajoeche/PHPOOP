<?php


class P_Calendario 
{
	use MObjetoInterno, Utilitario;
	public $animal2;	
	public $numeroAnimal;	
	public $diaMes;			
	public $nombreMes;			
	public $resultadoPorAnimal;			
	public $tabla;			
	public $titulo;			
	public $criterios =[
						"buscarResultadoPorAnimal"=>["objeto"=>'M_ResultadoPorAnimalLoteria',"funcion"=>'objetoLoteriaAnimal'],
						"buscarResultadoDosAnimales"=>["objeto"=>'M_ResultadoDosAnimalesLoteria',"funcion"=>'objetoLoteriaAnimalAnimal2'],
						"buscarResultadoAnimalesPorFecha"=>["objeto"=>'M_ResultadoAnimalFecha',"funcion"=>'objetoLoteria'],
					   ];
					   
    function ejecutar() {
		
		if ($this->numeroAnimal=='2'){
			$this->dosAnimales();	

		} elseif ($this->numeroAnimal=='1') {
			$this->unAnimal();
			
		} elseif ($this->numeroAnimal=='6') {	
			$this->animalFecha();
		}
    }

    public function unAnimal() { 	
		$this->setTituloUnAnimal();
		$this->obtenerResultadoPorAnimal();
		$this->marcarAnimalCalendario();
	}

    public function setTituloUnAnimal() { 	
		$this->titulo = $this->nombreMes.' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal);
	}

    public function obtenerResultadoPorAnimal() { 
		$this->resultadoPorAnimal = $this->ejecutarObjeto("buscarResultadoPorAnimal");
	}

    public function marcarAnimalCalendario() { 
		$this->nombreObjeto='P_MesAnimal';
		$this->crearInstanciaObjeto();
		$this->inicializarVariablesMesResultado();
		$this->objeto->ejecutar();
		$this->guardarResultado();
	}

    public function inicializarVariablesMesResultado() {
		$this->objeto->setMes($this->diaMes);
		$this->objeto->setResultado($this->resultadoPorAnimal->tabla);				
	}

    public function guardarResultado() {
		$this->tabla=$this->objeto->tabla;				
	}
	
    public function dosAnimales() { 	
		$this->setTituloDosAnimales();
		$this->obtenerResultadoDosAnimales();
		$this->marcarDosAnimalesCalendario();
	}	
	
    public function setTituloDosAnimales() { 	
		$this->titulo = $this->nombreMes.' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal).' / '.$this->getAnimal($this->animal2);
	}	
	
    public function obtenerResultadoDosAnimales() { 
		$this->resultadoPorAnimal = $this->ejecutarObjeto("buscarResultadoDosAnimales");
		$this->marcarDosAnimalesCalendario();
	}
	
    public function marcarDosAnimalesCalendario() { 
		$this->setNombreObjeto('P_MesAnimal2');
		$this->crearInstanciaObjeto();
		$this->inicializarVariablesMesResultadoAnimalAnimal2();
		$this->objeto->ejecutar();
		$this->guardarResultado();
	}

    public function inicializarVariablesMesResultadoAnimalAnimal2() {
		$this->objeto->setMes($this->diaMes);
		$this->objeto->setResultado($this->resultadoPorAnimal->tabla);	
		$this->objeto->setAnimal($this->animal);
		$this->objeto->setAnimal2($this->animal2);
	}


    public function animalFecha() { 	
		$this->setTituloAnimalFecha();
		$this->obtenerResultadoAnimalFecha();
		$this->marcarAnimalCalendario();
	}

    public function setTituloAnimalFecha() { 	
		$this->titulo = $this->nombreMes.' - '.$this->getLoteria($this->loteria).' - Salida Por Fechas';
	}

    public function obtenerResultadoAnimalFecha() { 		
		$this->resultadoPorAnimal = $this->ejecutarObjeto("buscarResultadoAnimalesPorFecha");
	}
			
    public function setNombreObjeto($nombreObjeto) { $this->nombreObjeto = $nombreObjeto; }	
    public function setLoteria($loteria) { $this->loteria = $loteria; }
    public function setAnimal($animal) { $this->animal = $animal; }
    public function setAnimal2($animal2) { $this->animal2 = $animal2; }
    public function setNumeroAnimal($numeroAnimal) { $this->numeroAnimal = $numeroAnimal; }
    public function setDiaMes($diaMes) { $this->diaMes = $diaMes; }
    public function setNombreMes($nombreMes) { $this->nombreMes = $nombreMes; }
    		
}

?>
