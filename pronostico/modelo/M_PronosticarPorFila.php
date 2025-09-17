<?php


class M_PronosticarPorFila extends M_PronosticarPorColor
{
	public $query="
					SELECT 
							COUNT(a.fila) as Repetidos, 
							a.fila
					FROM 
							resultados2025 AS R 
					INNER JOIN				 
							animal as A 
					ON 
						A.numero = R.animal						
					where 
							`codigoLoteria`= '%' and 
							`fecha` = '*'  
					GROUP BY 
							A.fila
					order by 
							Repetidos 
					DESC;
					";	
		
}

?>
