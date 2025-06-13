<?php


class Resultados extends PronosticarCategoria
{
	public $query="
					SELECT 
							hora, 
							animal, 
							nombre, 
							sumade,
							color, 
							posicion, 
							sector, 
							fila 
					FROM 
							`resultados2025`  AS r
					INNER JOIN  
							animal AS a 
					ON 
							r.animal = a.numero
					INNER JOIN  
							sorteo AS s 
					ON 
							s.codigoSorteo = r.codigoSorteo
					WHERE 
							`fecha` = '*' AND 
							`codigoLoteria` LIKE '%'; ";	
	
}

?>
