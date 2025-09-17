<?php


class P_Enjaulados
{
	use Utilitario, MObjetoInterno, MArray;
	public $sorteo;	
	public $limite;	
	public $animal;	
	public $animalPorSorteo;	
	public $secuencia;	
	public $enjaulados;	
	public $tabla;	
	public $criterios =[
						"buscarEnjaulados"=>["objeto"=>'M_Enjaulados',"funcion"=>'objetoFechaLoteriaSorteo'],
						"buscarEnjauladosDiario"=>["objeto"=>'M_EnjauladosDiario',"funcion"=>'objetoFechaLoteriaSorteo'],
					   ];
    function ejecutar() {
		if ($this->sorteo==13){
			$this->enjaulados = $this->ejecutarObjeto("buscarEnjauladosDiario");
		}else {
			$this->enjaulados =  $this->ejecutarObjeto("buscarEnjaulados");
		}
		$this->guardarResultados();
    } 
	
}

?>
