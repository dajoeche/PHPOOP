<?php


class M_ResultadoDosAnimalesLoteria extends M_BaseLoteriaAnimalAnimal2
{
	public $query="
					SELECT 
							* 
					FROM 
							`resultados2025` 
					WHERE 
							(`animal` = '&' AND 
							 `codigoLoteria` LIKE '%') or 
							(`animal` = '!' AND 
							`codigoLoteria` LIKE '%')  
					ORDER BY 
							`codigoResultados` 
					ASC ";	
	
}

?>
