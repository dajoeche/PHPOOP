<?php


class P_Secuencia 
{
	use Utilitario, MObjetoInterno, MArray;
	public $sorteo;	
	public $limite;	
	public $animal;	
	public $animalPorSorteo;	
	public $secuencia;	
	public $tabla;	

	public $criterios =[
						"buscarAnimal"=>["objeto"=>'M_AnimalPorSorteo',"funcion"=>'objetoAyerLoteriaSorteo'],
						"buscarSecuenciaPrimerSorteo"=>["objeto"=>'M_SecuenciaLimit8',"funcion"=>'objetoFechaLoteriaSorteoAnimalLimite'],
						"buscarSecuencia"=>["objeto"=>'M_SecuenciaLimit',"funcion"=>'objetoFechaLoteriaSorteoAnimalLimite'],
					   ];
    function ejecutar() {
		$this->obtenerDiaAnterior(); 
		if ($this->sorteo==='1'){
			$this->setSorteo('12');
            $this->buscarAnimal(); 
			$this->secuencia = $this->ejecutarObjeto("buscarSecuenciaPrimerSorteo");
		
		} elseif($this->sorteo>'1' and $this->sorteo<'13') {	
			$this->setSorteo($this->sorteo-1);
			$this->buscarAnimal();
			$this->secuencia = $this->ejecutarObjeto("buscarSecuencia");

		}
		
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

    function buscarSecuenciaPrimerSorteo() {
		$this->secuencia = new M_SecuenciaLimit8();		
		$this->secuencia->setFecha($this->fecha);
		$this->secuencia->setLoteria($this->loteria);
		$this->secuencia->setAnimal($this->animal);
		$this->secuencia->setSorteo('12');
		$this->secuencia->setLimite($this->limite);
		$this->secuencia->ejecutar();
		$this->guardarResultado();

	}		

    function guardarResultado() {
		$this->tabla=$this->secuencia->tabla;	
	}	 
	
    public function setSorteoSet($sorteo) { $this->sorteo = '12'; }		
}

?>
