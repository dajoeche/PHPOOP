<?php


class M_BaseFechaLoteriaSorteoAnimal extends M_Base
{
	public $query="";	

    function incluirVariablesQuery() {
		$this->incluirFechaQuery($this->fecha);
		$this->incluirLoteriaQuery($this->loteria);			
		$this->incluirSorteoQuery($this->sorteo);
		$this->incluirAnimalQuery($this->animal);
    }		
}

?>
