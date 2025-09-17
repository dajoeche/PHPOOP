<?php


class M_PorSorteoLimit extends M_BaseFechaLoteriaSorteoLimite
{
	public $query="SELECT 							 
							nombre, 
							animal,
							sumade, 
							color, 
							posicion, 
							sector, 
							fila, 
							fecha 
				   FROM 
						`resultados2025`, 
						 animal 
				   WHERE 
						animal = numero  AND 
						`codigoLoteria` LIKE '%' AND 
						`codigoSorteo` LIKE '$' AND 
						fecha < '*'
				   order by 
							fecha desc
					LIMIT @";	
}

?>
