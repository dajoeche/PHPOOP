<?php

class TablaBaseLoteriaSorteo extends BaseTabla
{
  
	public $loteria;
	public $sorteo;
    public $nombreVariableIsset='loteria';

    public function setDatosPost() { 
		$this->loteria = $_POST["loteria"];	
		$this->sorteo = $_POST["sorteo"];	
	}
	
    public function setDatosPorDefecto() { 
	    $this->loteria = 'LAC';	      
	    $this->sorteo = '1';	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setLoteria($this->loteria);				
		$this->objeto->setSorteo($this->sorteo);				
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);
	}
		
}

?>
