<?php


class M_BaseFechaLoteriaSorteoAnimalLimite extends M_Base
{
	public $query="";	

    function incluirVariablesQuery() {
		$this->incluirFechaQuery($this->fecha);
		$this->incluirLoteriaQuery($this->loteria);			
		$this->incluirSorteoQuery($this->sorteo);
		$this->incluirAnimalQuery($this->animal);
		$this->incluirLimiteQuery($this->limite);

    }		
}

?>
