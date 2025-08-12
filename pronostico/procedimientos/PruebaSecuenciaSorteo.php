<?php


class PruebaSecuenciaSorteo 
{
	use Utilitario;
	
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
	    
    public function setLoteria($loteria) { $this->loteria = $loteria; }
    public function setFecha($fecha) { $this->fecha = $fecha; }
    public function setSorteo($sorteo) { $this->sorteo = $sorteo; }
    		    
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
		$this->M_pruebaSecuenciaSorteo = new M_PruebaSecuenciaSorteo($this->fecha, $this->loteria, $this->sorteo, $this->animalPorSorteo->animal);		
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
		$this->animalPorSorteo = new AnimalPorSorteo($this->loteria, $this->sorteo, $this->ayer); 
	}     
    
}

?>
