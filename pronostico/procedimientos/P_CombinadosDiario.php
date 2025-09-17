<?php
										
class P_CombinadosDiario extends P_CombinadosSorteo
{
    public $encabezadoTabla =  array(array(  
												"Numero",
												"Nombre",
												"Descartes",
												"Salio Ayer",
												"Jaula Diaria Alta",
												"Jaula Diaria Media",
												"Jaula Diaria Baja",
												"Jaula Sorteo Alta",
												"Jaula Sorteo Media",
												"Jaula Sorteo Baja",
												"Sorteo",  												
											  )
										);
										    		    
    function ejecutar() {
		
		$this->titulo = $this->titulo.' Diario '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);				
		$this->ayer=$this->fecha;
		$this->obtenerResultadosPorDia();	
		$this->configurarFuncionRetornoIterarArray("recorrerResultado");
		$this->iterarArray($this->resultadoPorDia->tabla);	
    }	
  			
    public function recorrerResultado($resultado) { 
		$this->animal = $resultado[1];
		$this->sorteo = $resultado[0];
		$this->obtenerDescartes(); 
		$this->obtenerSalioAyer();
		$this->obtenerJaulaDiariaAlta();
		$this->obtenerJaulaDiariaMedia();
		$this->obtenerJaulaDiariaBaja();
		$this->obtenerJaulaSorteoAlta();
		$this->obtenerJaulaSorteoMedia();
		$this->obtenerJaulaSorteoBaja();
		$this->comparar();
	}
 			
    public function obtenerResultadosPorDia() { 
		$this->resultadoPorDia = $this->ejecutarObjeto("buscarResultadosPorDia");
	}     
     
    function guardarCombinados() {
		$this->tabla[]= array(		
								$this->animal, 
								$this->getAnimal($this->animal),
								$this->banderaDescartes,
								$this->banderaSalioAyer,
								$this->banderaJaulaDiariaAlta,
								$this->banderaJaulaDiariaMedia,
								$this->banderaJaulaDiariaBaja,
								$this->banderaJaulaSorteoAlta,
								$this->banderaJaulaSorteoMedia,
								$this->banderaJaulaSorteoBaja,
								$this->getSorteo($this->sorteo),								
							  );
    }    	
}

?>
