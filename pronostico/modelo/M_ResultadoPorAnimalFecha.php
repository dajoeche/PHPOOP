<?php


class M_ResultadoPorAnimalFecha extends M_BaseFechaLoteriaAnimal
{
	public $query="
					SELECT 
							DISTINCT(fecha) 
					FROM 
							`resultados2025` 
					WHERE 
							`animal` = '&' AND 
							`codigoLoteria` = '%'  and 
							`fecha` < '*'
					ORDER BY `fecha` DESC ";	
}

?>
