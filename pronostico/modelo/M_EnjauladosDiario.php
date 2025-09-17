<?php


class M_EnjauladosDiario extends M_BaseFechaLoteria
{
	public $query="
					SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir, 
							'2025-01-02', 
							numero, 
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
													`fecha` < '*'  
											) and 
							`numero` <> '-'
					UNION 
					SELECT 
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							max(fecha), 
							R.animal, 
							A.nombre, 
							A.sector 
					FROM 
							resultados2025 AS R, 
							animal as A 
					where 
							A.numero = R.animal and 
							`codigoLoteria`= '%' and 
							`fecha` < '*' and 
							`animal` <> '-'
					GROUP BY 
							R.animal 
					ORDER BY 
							dias_sin_salir 
					DESC; 	
	";	
	public $queryOriginal ="
					SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir, 
							'2025-01-02', 
							numero, 
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
													`fecha` < '*' 
											) 
					UNION 
					SELECT 
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							max(fecha), 
							R.animal, 
							A.nombre, 
							A.sector 
					FROM 
							resultados2025 AS R, 
							animal as A 
					where 
							A.numero = R.animal and 
							`codigoLoteria`= '%' and 
							`fecha` < '*' and 
							`animal` <> '-'
					GROUP BY 
							R.animal 
					ORDER BY 
							dias_sin_salir 
					DESC;	
	";	

}

?>
