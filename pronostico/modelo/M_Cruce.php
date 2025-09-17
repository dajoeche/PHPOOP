<?php


class M_Cruce extends M_BaseFechaLoteria
{
	public $query="
					SELECT  
							animal
					FROM 
							`resultados2025`  AS r
					WHERE 
							`fecha` = '*' AND 
							`codigoLoteria` LIKE '%'; ";	
							
}

?>
