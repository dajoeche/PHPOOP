<?php


class P_PruebaSecuenciaSorteo 
{
	use Utilitario, MObjetoInterno;
	
	public $fecha;
	public $ayer;
	public $fechaInicio = '2025-01-02';
	public $loteria;
	public $sorteo;
	public $animal;
	public $tabla=array();
	public $M_pruebaSecuenciaSorteo;
    public $animalPorSorteo;
    public $contador=0;
    		    
    function ejecutar() {
		while ($this->fechaInicio < $this->fecha){
			$this->obtenerDiaAnterior();
			$this->obtenerAnimalSorteo(); 
			$this->crearInstanciaObjeto();
			$this->guardarResultadoTabla();
			$this->ajustarFecha();
		}
    }	
 		    
    function crearInstanciaObjeto() {
		$this->M_pruebaSecuenciaSorteo = new M_PruebaSecuenciaSorteo();		
		$this->M_pruebaSecuenciaSorteo->setFecha($this->fecha);
		$this->M_pruebaSecuenciaSorteo->setLoteria($this->loteria);
		$this->M_pruebaSecuenciaSorteo->setSorteo($this->sorteo);
		$this->M_pruebaSecuenciaSorteo->setAnimal($this->animalPorSorteo->tabla[0][0]);
		$this->M_pruebaSecuenciaSorteo->ejecutar();
    }

	
    public function guardarResultadoTabla() {
		if (!empty($this->M_pruebaSecuenciaSorteo->tabla)){
			$this->contador = $this->contador+1;
			array_unshift($this->M_pruebaSecuenciaSorteo->tabla[0], $this->contador);
			array_push($this->tabla,$this->M_pruebaSecuenciaSorteo->tabla[0]);
		}
	}
 		    
    function ajustarFecha() {
		$this->fecha=$this->ayer;
    }
 			
    public function obtenerAnimalSorteo() { 
		$this->animalPorSorteo = new M_AnimalPorSorteo(); 
		$this->animalPorSorteo->setFecha($this->ayer); 
		$this->animalPorSorteo->setLoteria($this->loteria); 
		$this->animalPorSorteo->setSorteo($this->sorteo); 
		$this->animalPorSorteo->ejecutar(); 
	}     
    
}

?>
