<?php


class P_PronosticarPorDecena 
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
						"buscarPorDecena"=>["objeto"=>'M_PronosticarPorDecena',"funcion"=>'objetoFechaLoteria'],
					   ];
    function ejecutar() {
		$this->obtenerDiaAnterior(); 
		$this->setFecha($this->ayer);
		$this->porColor = $this->ejecutarObjeto("buscarPorDecena");	
		$this->guardarResultados();
	}
	
}

?>
