<?php

class TablaFechaLoteria extends Tabla
{
  
	public $fecha;
	public $loteria;

    public function setDatosPost() {
		$this->fecha = $_POST["fecha"]; 
		$this->loteria = $_POST["loteria"];	
	}
	
    public function setDatosPorDefecto() {
		$this->fecha = date("Y-m-d"); 
	    $this->loteria = 'LAC';	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setFecha($this->fecha);
		$this->objeto->setLoteria($this->loteria);				
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria);
	}
		
}

?>
