<?php


class P_SecuenciaSorteo 
{
	use Utilitario, MObjetoInterno, MArray;
	public $sorteo;	
	public $limite;	
	public $animal;	
	public $animalPorSorteo;	
	public $secuencia;	
	public $resultados;	
	public $tabla;	
	public $criterios =[
						"buscarAnimal"=>["objeto"=>'M_AnimalPorSorteo',"funcion"=>'objetoAyerLoteriaSorteo'],
						"buscarSecuencia"=>["objeto"=>'M_SecuenciaSorteo',"funcion"=>'objetoFechaLoteriaSorteoAnimalLimite'],
					   ];
					   
    function ejecutar() {
		$this->obtenerDiaAnterior(); 
        $this->buscarAnimal();
       // $this->imprimir($this->resultados);
		$this->secuencia = $this->ejecutarObjeto("buscarSecuencia");
		$this->guardarResultado();
	}
	
    function buscarAnimal() {
		$this->animalPorSorteo = $this->ejecutarObjeto("buscarAnimal");
		$this->guardarAnimal();
	}		
	
    function guardarAnimal() {
		if(isset($this->animalPorSorteo->tabla[0][0])){
			$this->animal=$this->animalPorSorteo->tabla[0][0];	
		} else {
			$this->animal='-';
		}
	}				

    function guardarResultado() {
		$this->tabla=$this->secuencia->tabla;	
	}	 
		
}

?>
