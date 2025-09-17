<?php


class P_DiaSiguiente 
{
	use MObjetoInterno, Utilitario, MArray;
	public $fechaInicio='2025-01-02';	
	public $fechaFinal;	
	public $resultados;	
	public $date;	
	public $contador=0;	
	public $tabla=array();	
	public $criterios =[
						"buscarResultado"=>["objeto"=>'M_DiaSiguiente',"funcion"=>'objetoFechaLoteriaSorteo'],
					   ];		

    function ejecutar() { 
	    $this->setFechaFinal();
	    $this->setDate();
	    $this->iterarFechas();

    } 
    
    function setFechaFinal() { 
		$this->fechaFinal = date("Y-m-d");
	}    	
    
    function setDate() { 
		$this->date = new DateTime($this->fechaInicio);
	}    	
    
    function iterarFechas() { 
	    
		while ($this->fechaInicio < $this->fechaFinal){
			$this->setFecha($this->fechaInicio);
			$this->buscarResultados();
			$this->avanzarFecha();	
			$this->guardarResultados(); 		
		}
	}  
	
    function avanzarFecha() { 
		$this->date->modify("+1 day");
		$this->fechaInicio = $this->date->format("Y-m-d");
	}  
	
    function buscarResultados() { 
		$this->resultados = $this->ejecutarObjeto("buscarResultado");

	}  
	
    
    function guardarResultados() { 
		if (isset($this->resultados->tabla[0][0])){
			$this->contador = $this->contador+1;
			array_unshift($this->resultados->tabla[0],$this->contador);
			array_push($this->tabla,$this->resultados->tabla[0]);
		}
	}
	 	
}

?>
