<?php


class P_Cruce 
{
	use MObjetoInterno, Utilitario, MArray;
	public $animal2;	
	public $numeroAnimal;	
	public $diaMes;			
	public $nombreMes;			
	public $resultadoPorAnimal;			
	public $tabla;			
	public $contador= 0;			
	public $titulo;			
	public $lac;			
	public $lgr;			
	public $slp;			
	public $rla;						
	public $lai;			
	public $ltr;			
	public $caz;	
	public $matrizLoterias=array('lac', 'lgr', 'slp', 'rla',  'lai', 'ltr', 'caz');		
	public $matrizLoteriasSinSorteoOcho=array('rla', 'caz');
	public $criterios =[
						"buscarResultadoLoteria"=>["objeto"=>'M_Cruce',"funcion"=>'objetoFechaLoteria'],
					   ];		

    function ejecutar() {
		$this->configurarFuncionRetornoIterarArray('obtenerResultadoLoteria');
		$this->iterarArray($this->matrizLoterias);
		$this->configurarFuncionRetornoIterarArray('setLoteriaSinSorteoOcho');
		$this->iterarArray($this->matrizLoteriasSinSorteoOcho);
		 for($i=0;$i<12;$i++){
			 if (isset($this->lac->tabla[$i][0])){
				$this->setContador($i);
			    $this->guardarSorteo();
				$this->configurarFuncionRetornoIterarArray('guardarResultadosLoteria');
				$this->iterarArray($this->matrizLoterias);			    
			}
		 }

	}

    function obtenerResultadoLoteria($loteria) {
		$this->setLoteria(strtoupper($loteria));	
		$this->$loteria = $this->ejecutarObjeto("buscarResultadoLoteria");
	}		

    function setLoteriaSinSorteoOcho($loteria) {
		array_unshift($this->$loteria->tabla, '-');	
	}		

    function guardarSorteo() {
		$this->tabla[$this->contador][]=$this->getSorteo($this->contador+1);	
	}		

    function guardarResultadosLoteria($loteria) {
		if (isset($this->$loteria->tabla[$this->contador])){
			$this->tabla[$this->contador][]=$this->$loteria->tabla[$this->contador][0];		
		}
	}

    function setContador($contador) {
		$this->contador=$contador;	
	}		
}

?>
