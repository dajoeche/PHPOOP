<?php

class TablaBaseFechaLoteriaSorteoLimite extends BaseTabla
{
  
	public $fecha;
	public $loteria;
	public $sorteo;

    public function setDatosPost() { 
		$this->fecha = $_POST["fecha"]; 
		$this->loteria = $_POST["loteria"];	
		$this->sorteo = $_POST["sorteo"];	
		$this->limite = '6';	
	}
	
    public function setDatosPorDefecto() { 
		$this->fecha = date("Y-m-d"); 
	    $this->loteria = 'LAC';	      
	    $this->sorteo = '1';	      
	    $this->limite = '6';	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setFecha($this->fecha);
		$this->objeto->setLoteria($this->loteria);				
		$this->objeto->setSorteo($this->sorteo);				
		$this->objeto->setLimite($this->limite);				
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);
	}
		
}

?>
