<?php


class P_PronosticarPorSector 
{
	use Utilitario, MObjetoInterno, MArray;
	public $sorteo;	
	public $limite;	
	public $animal;	
	public $animalPorSorteo;	
	public $porColor;	
	public $tabla;	
	public $criterios =[
						"buscarPorSector"=>["objeto"=>'M_PronosticarPorSector',"funcion"=>'objetoFechaLoteria'],
					   ];
    function ejecutar() {
		$this->obtenerDiaAnterior(); 
		$this->setFecha($this->ayer);
		$this->porColor = $this->ejecutarObjeto("buscarPorSector");	
		$this->guardarResultados();
	}
	
}

?>
