<?php


class P_PorFechas 
{
	use Utilitario, MObjetoInterno, MArray;
	public $sorteo;	
	public $limite;	
	public $animal;	
	public $tipo;	
	public $porFecha;	
	public $tabla;	
	public $criterios =[
						"buscarPorFechas"=>["objeto"=>'M_PorFechas',"funcion"=>'objetoFechaLoteria'],
						"buscarPorFechasDiario"=>["objeto"=>'M_PorFechasDiario',"funcion"=>'objetoFechaLoteria'],
					   ];
    function ejecutar() {
		//$this->obtenerDiaAnterior(); 
		//$this->setFecha($this->ayer); 
		//echo '--------------------------------------------------------------------'.$this->tipo.'---------------';
		if($this->tipo === '1'){
			$this->porFecha = $this->ejecutarObjeto("buscarPorFechas");	
		} elseif($this->tipo === '2') {
			$this->porFecha = $this->ejecutarObjeto("buscarPorFechasDiario");
		}
		$this->guardarResultados();
	}
	
}

?>
