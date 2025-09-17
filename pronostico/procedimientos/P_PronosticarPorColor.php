<?php


class P_PronosticarPorColor 
{
	use Utilitario, MObjetoInterno, MArray;
	public $sorteo;	
	public $limite;	
	public $animal;	
	public $animalPorSorteo;	
	public $porColor;	
	public $tabla;	
   // public $criterios=array(
	//						array("buscarAnimalPrimerSorteo"=>array( "objeto"=>'M_SecuenciaLimit8', "funcion"=> 'objetoFechaLoteriaSorteo')),
	//					 );	
	public $criterios =[
						"buscarPorColor"=>["objeto"=>'M_PronosticarPorColor',"funcion"=>'objetoFechaLoteria'],
					   ];
    function ejecutar() {
		$this->obtenerDiaAnterior(); 
		$this->setFecha($this->ayer);
		$this->porColor = $this->ejecutarObjeto("buscarPorColor");	
		$this->guardarResultados();
	}
	
}

?>
