<?php


class M_ResultadosCodigoSorteo extends M_BaseFechaLoteria
{
	public $query="
					SELECT 
							r.codigoSorteo, 
							animal, 
							nombre, 
							sumade,
							color, 
							posicion, 
							sector, 
							fila,
							hora 
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
