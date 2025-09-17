<?php

class TablaBaseFechaLoteriaSorteo extends BaseTabla
{
  
	public $fecha;
	public $loteria;
	public $sorteo;

    public function setDatosPost() { 
		$this->fecha = $_POST["fecha"]; 
		$this->loteria = $_POST["loteria"];	
		$this->sorteo = $_POST["sorteo"];	
	}
	
    public function setDatosPorDefecto() { 
		$this->fecha = date("Y-m-d"); 
	    $this->loteria = 'LAC';	      
	    $this->sorteo = '1';	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setFecha($this->fecha);
		$this->objeto->setLoteria($this->loteria);				
		$this->objeto->setSorteo($this->sorteo);				
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);
	}
		
}

?>
