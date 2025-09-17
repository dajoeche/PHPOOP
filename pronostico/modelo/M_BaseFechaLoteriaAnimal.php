<?php


class M_BaseFechaLoteriaAnimal extends M_Base
{

	public $query="
					SELECT 
							animal, fecha 
					FROM 
							`resultados2025` 
					WHERE 
							`animal` = '&' AND 
							`codigoLoteria` = '%'  and 
							`fecha` < '*'
					ORDER BY `fecha` DESC ";	
    
 
    function incluirVariablesQuery() {
		$this->incluirFechaQuery($this->fecha);
		$this->incluirLoteriaQuery($this->loteria);
		$this->incluirAnimalQuery($this->animal);
    }
 	
}

?>
