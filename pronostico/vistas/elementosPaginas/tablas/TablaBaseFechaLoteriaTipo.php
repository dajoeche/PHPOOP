<?php

class TablaBaseFechaLoteriaTipo extends BaseTabla
{
  
	public $fecha;
	public $loteria;
	public $sorteo;
	public $tipo;

    public function setDatosPost() { 
		$this->fecha = $_POST["fecha"]; 
		$this->loteria = $_POST["loteria"];	
		if(isset($_POST["tipo"])){
			$this->tipo = $_POST["tipo"];
		}else {
			$this->tipo = '1';	
		}
	}
	
    public function setDatosPorDefecto() { 
		$this->fecha = date("Y-m-d"); 
	    $this->loteria = 'LAC';	      	      
	    $this->tipo = '1';	      	      
	}      

    public function inicializarVariablesObjeto() {
		$this->objeto->setFecha($this->fecha);
		$this->objeto->setLoteria($this->loteria);							
		$this->objeto->setTipo($this->tipo);							
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria);
	}
		
}

?>
