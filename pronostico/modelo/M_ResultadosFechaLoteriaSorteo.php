<?php


class M_ResultadosFechaLoteriaSorteo extends M_BaseFechaLoteriaSorteo
{
	public $query="
					SELECT 
							`animal`
					FROM 
							`resultados2025` 
					WHERE 
							`fecha` = '*' AND 
							`codigoLoteria` = '%'  and 
							`codigoSorteo` = '$'
					ORDER BY `fecha` DESC ";
					
	public $queryOriginal =	"
					SELECT 
							`animal`
					FROM 
							`resultados2025` 
					WHERE 
							`fecha` = '*' AND 
							`codigoLoteria` = '%'  and 
							`codigoSorteo` = '$'
					ORDER BY `fecha` DESC ";
}

?>
