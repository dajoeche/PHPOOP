<?php


class M_EnjauladoDiario extends M_BaseFechaLoteria
{
	public $query="
					SELECT 
							numero, 
							nombre, 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir, 
							'2025-01-02'  
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
							 
							R.animal, 
							A.nombre,
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							max(fecha)
					FROM 
							resultados2025 AS R, 
							animal as A 
					where 
							A.numero = R.animal and 
							`codigoLoteria`= '%' and 
							`fecha` < '*' 
					GROUP BY 
							R.animal 
					ORDER BY 
							dias_sin_salir 
					DESC; 	
	";	
	public $queryOriginal ="
					SELECT 
							numero, 
							nombre,
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir, 
							'2025-01-02'
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
							R.animal, 
							A.nombre, 
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							max(fecha)
					FROM 
							resultados2025 AS R, 
							animal as A 
					where 
							A.numero = R.animal and 
							`codigoLoteria`= '%' and 
							`fecha` < '*' 
					GROUP BY 
							R.animal 
					ORDER BY 
							dias_sin_salir 
					DESC;	
	";	

 	
}

?>
