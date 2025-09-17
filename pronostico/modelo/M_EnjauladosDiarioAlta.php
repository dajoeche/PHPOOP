<?php


class M_EnjauladosDiarioAlta extends M_BaseFechaLoteria
{
	public $query="
					SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir, 
							numero,
							'2025-01-02', 
							nombre, 
							sector 
					FROM 
							`animal` 
					where 
							numero not in (
											SELECT 
													animal 
											from 
													`resultados2025` 
											where 
													`codigoLoteria`= '%' and 
													`fecha` < '*' and
													`animal` <>'-'
											)  and 
							`numero` <>'-'
					HAVING DATEDIFF ('*', '2025-01-02')  > 19
					UNION 
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
							`animal` <>'-'
					GROUP BY 
							R.animal 
					HAVING DATEDIFF ('*',max(fecha )) > 19
					ORDER BY 
							dias_sin_salir 
					DESC; 	
	";	
	public $queryOriginal ="
					SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir, 
							numero,
							'2025-01-02', 
							nombre, 
							sector 
					FROM 
							`animal` 
					where 
							numero not in (
											SELECT 
													animal 
											from 
													`resultados2025` 
											where 
													`codigoLoteria`= '%' and 
													`fecha` < '*' a¿nd 
													`animal` <>'-'
											) and
							`numero` <>'-'
					HAVING DATEDIFF ('*', '2025-01-02') > 19
					UNION 
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
							`animal` <>'-'
					GROUP BY 
							R.animal 
					HAVING DATEDIFF ('*',max(fecha )) > 19
					ORDER BY 
							dias_sin_salir 
					DESC;	
	";		
}

?>
