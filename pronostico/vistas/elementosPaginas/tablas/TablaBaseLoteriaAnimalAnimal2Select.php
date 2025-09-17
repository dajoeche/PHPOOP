<?php

class TablaBaseLoteriaAnimalAnimal2Select extends BaseTabla
{
  
	public $fecha;
	public $loteria;
	public $sorteo;

    public function setDatosPost() { 
		$this->animal = $_POST["animal"];	
		$this->animal2 = $_POST["animal2"];	
		$this->loteria = $_POST["loteria"];	
		$this->numeroAnimal = $_POST["numeroAnimal"];		
	}
	
    public function setDatosPorDefecto() { 
		$this->loteria = 'LAC';		
		$this->animal = '00';	         	
		$this->animal2 = '0';	         		         	
		$this->numeroAnimal = '1';	 	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setLoteria($this->loteria);				
		$this->objeto->setAnimal($this->animal);				
		$this->objeto->setAnimal2($this->animal2);				
		$this->objeto->setNumeroAnimal($this->numeroAnimal);				
		$this->objeto->setDiaMes($this->diaMes);				
		$this->objeto->setNombreMes($this->nombreMes);				
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);
	}
		
}

?>
