<?php


class P_PronosticarPorFila 
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
						"buscarPorFila"=>["objeto"=>'M_PronosticarPorFila',"funcion"=>'objetoFechaLoteria'],
					   ];
    function ejecutar() {
		$this->obtenerDiaAnterior(); 
		$this->setFecha($this->ayer);
		$this->porColor = $this->ejecutarObjeto("buscarPorFila");	
		$this->guardarResultados();
	}
	
}

?>
