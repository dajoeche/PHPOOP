<?php


class P_Combinados
{
	use Utilitario, MObjetoInterno, MArray;
	
	public $resultado;
	public $encabezadoTabla;
	public $titulo;
	public $tabla;
	public $criterios =[
						"buscarCombinadosSorteo"=>["objeto"=>'P_CombinadosSorteo',"funcion"=>'objetoFechaLoteriaSorteo'],
						"buscarCombinadosDiario"=>["objeto"=>'P_CombinadosDiario',"funcion"=>'objetoFechaLoteriaSorteo'],
					   ];    		    
    function ejecutar() {
		
		if($this->sorteo=='13'){
			$this->resultado = $this->ejecutarObjeto("buscarCombinadosDiario");
		} else {
			$this->resultado = $this->ejecutarObjeto("buscarCombinadosSorteo");
		}
		$this->titulo = $this->resultado->titulo;
		$this->encabezadoTabla = $this->resultado->encabezadoTabla;
		$this->tabla = $this->resultado->tabla;
	}
}

?>
