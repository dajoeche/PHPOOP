<?php

class TablaBaseLoteriaSorteoTipo extends BaseTabla
{
  
	public $loteria;
	public $sorteo;
    public $nombreVariableIsset='loteria';

    public function setDatosPost() { 
		$this->loteria = $_POST["loteria"];	
		$this->sorteo = $_POST["sorteo"];	
		$this->tipo = $_POST["tipo"];	
	}
	
    public function setDatosPorDefecto() { 
	    $this->loteria = 'LAC';	      
	    $this->sorteo = '1';	      
	    $this->tipo = '1';	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setLoteria($this->loteria);				
		$this->objeto->setSorteo($this->sorteo);				
		$this->objeto->setTipo($this->tipo);				
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo).' - '.$this->getTipo($this->tipo);
	}
		
}

?>
