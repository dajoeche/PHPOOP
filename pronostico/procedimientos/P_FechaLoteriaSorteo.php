<?php


class P_FechaLoteriaSorteo 
{
	use Utilitario;
	
	public $fecha;
	public $ayer;
	public $resultados;
	public $registro;
	public $enjaulado;
	public $diasSinSalir;
	public $animalEnjaulado;
	public $fechaInicio = '2025-01-02';
	public $loteria;
	public $sorteo;
	public $animal;
	public $tabla=array();
	public $M_pruebaSecuenciaSorteo;
    public $animalPorSorteo;
    public $contador=0;

    public function setFecha($fecha) { $this->fecha = $fecha; }	    
    public function setLoteria($loteria) { $this->loteria = $loteria; }
    public function setSorteo($fecha) { $this->sorteo = $sorteo; }
    		    
    function ejecutar() {

    }	
	   
    
}

?>
