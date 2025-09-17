<?php


class P_PorSorteo 
{
	use Utilitario, MObjetoInterno, MArray;
	public $sorteo;	
	public $limite;	
	public $animal;	
	public $tipo;	
	public $animalPorSorteo;	
	public $porSorteo;	
	public $tabla;	

	public $criterios =[
						"buscarPorSorteo"=>["objeto"=>'M_PorSorteo',"funcion"=>'objetoLoteriaSorteo'],
						"buscarPorSorteoDiario"=>["objeto"=>'M_PorSorteoDiario',"funcion"=>'objetoLoteriaSorteo'],
					   ];
    function ejecutar() {

		if($this->tipo == '1'){
			$this->porSorteo = $this->ejecutarObjeto("buscarPorSorteo");
		} else {
			$this->porSorteo = $this->ejecutarObjeto("buscarPorSorteoDiario");
		}
		$this->guardarResultados();
    }  	
}

?>
