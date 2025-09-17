<?php


class M_EnjauladosMedia extends M_BaseFechaLoteriaSorteo
{
	public $query="
					SELECT 
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							R.animal, 
							max(fecha), 
							A.nombre, 
							A.sector 
					FROM 
							resultados2025 AS R, 
							animal as A 
					where 
							A.numero = R.animal and 
							`codigoLoteria`= '%' and 
							`fecha` < '*' and 
							`codigoSorteo`='$' 
					GROUP BY 
							R.animal 
					HAVING DATEDIFF ('*',max(fecha )) < 90 and DATEDIFF ('*',max(fecha )) > 39
					ORDER BY 
							dias_sin_salir 
					DESC; 	
	";	
	public $queryOriginal ="

					SELECT 
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							R.animal, 
							max(fecha), 
							A.nombre, 
							A.sector 
					FROM 
							resultados2025 AS R, 
							animal as A 
					where 
							A.numero = R.animal and 
							`codigoLoteria`= '%' and 
							`fecha` < '*' and 
							`codigoSorteo`='$' 
					GROUP BY 
							R.animal 
					HAVING DATEDIFF ('*',max(fecha )) < 90 and DATEDIFF ('*',max(fecha )) > 39
					ORDER BY 
							dias_sin_salir 
					DESC; 
	";	
	
}

?>
