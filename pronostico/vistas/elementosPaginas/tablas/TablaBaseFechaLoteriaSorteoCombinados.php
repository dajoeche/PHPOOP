<?php

class TablaBaseFechaLoteriaSorteoCombinados extends BaseTabla
{
  
	public $fecha;
	public $loteria;
	public $sorteo;
	public $combinados;

    public function setDatosPost() { 
		$this->fecha = $_POST["fecha"]; 
		$this->loteria = $_POST["loteria"];	
		$this->sorteo = $_POST["sorteo"];	
		$this->combinados = $_POST["combinados"];	
	}
	
    public function setDatosPorDefecto() { 
		$this->fecha = date("Y-m-d"); 
	    $this->loteria = 'LAC';	      
	    $this->sorteo = '1';	      
	    $this->combinados = '1';	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setFecha($this->fecha);
		$this->objeto->setLoteria($this->loteria);				
		$this->objeto->setSorteo($this->sorteo);				
		$this->objeto->setCombinados($this->combinados);				
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);
	}
		
}

?>
