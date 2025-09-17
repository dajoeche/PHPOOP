<?php

class TablaBaseFechaLoteriaAnimal1234NumeroAnimal extends BaseTabla
{
  
	public $fecha;
	public $loteria;
	public $sorteo;

    public function setDatosPost() { 
		$this->fecha = $_POST["fecha"]; 
		$this->loteria = $_POST["loteria"]; 
		$this->animal = $_POST["animal"]; 
		$this->animal2 = $_POST["animal2"]; 
		$this->animal3 = $_POST["animal3"]; 
		$this->animal4 = $_POST["animal4"]; 
		$this->numeroAnimal = $_POST["numeroAnimal"]; 
	}
	
    public function setDatosPorDefecto() { 
		$this->fecha = date("Y-m-d");   
		$this->loteria = 'LAC';    	
		$this->animal = '00';    	
		$this->animal2 = '0';    	
		$this->animal3 = '1';    	
		$this->animal4 = '2';    	
		$this->numeroAnimal = '4';        	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setFecha($this->fecha);
		$this->objeto->setLoteria($this->loteria);							
		$this->objeto->setAnimal($this->animal);							
		$this->objeto->setAnimal2($this->animal2);							
		$this->objeto->setAnimal3($this->animal3);							
		$this->objeto->setAnimal4($this->animal4);							
		$this->objeto->setNumeroAnimal($this->numeroAnimal);							
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria);
	}
		
}

?>
