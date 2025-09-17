<?php

class TablaBaseFecha extends BaseTabla
{
  
	public $fecha;
	public $loteria;
	public $sorteo;

    public function setDatosPost() { 
		$this->fecha = $_POST["fecha"]; 
	}
	
    public function setDatosPorDefecto() { 
		$this->fecha = date("Y-m-d");     	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setFecha($this->fecha);						
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha;
	}		
}

?>
