<?php


class M_PruebaSecuenciaSorteo extends M_BaseFechaLoteriaSorteoAnimal
{
	public $query="
	
					select 
							animal, 
							nombre,
							sector,
							fila, 
							color,
							sumade,
							fecha 
					from 
							resultados2025 as R 
					inner join 
							animal as A 
					on 
							animal=numero 
					inner join 
							sorteo as S 
					on 
							S.codigoSorteo=R.codigoSorteo 
					where 
							animal IN (
										SELECT 
												animal 
										FROM 
												resultados2025 as r 
										inner join 
												animal as a on a.numero = r.animal 
										WHERE 
												`fecha` IN ( 
															SELECT 
																	DATE_ADD(`fecha`, INTERVAL 1 DAY) 
															FROM 
																	resultados2025 
															where 
																	`animal`='&' and 
																	`codigoLoteria`='%' and 
																	`codigoSorteo` = '$' ) and 
												`codigoLoteria`='%' and 
												`codigoSorteo` = '$' and 
												`fecha`< '*') and 
							`codigoLoteria`='%' and 
							R.`codigoSorteo` = '$' and 
							`fecha`= '*' ; 
					";	
		
}

?>
