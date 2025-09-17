<?php


class M_ResultadoPorAnimalLoteria extends M_BaseLoteriaAnimal
{
	public $query="
					SELECT 
							* 
					FROM 
							`resultados2025` 
					WHERE 
							`animal` = '&' AND 
							`codigoLoteria` LIKE '%'  
					ORDER BY `codigoResultados` ASC ";	
}

?>
