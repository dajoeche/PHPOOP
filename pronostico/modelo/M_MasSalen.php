<?php


class M_MasSalen extends M_BaseFechaLoteriaSorteo
{

	public $query="
					SELECT 
							COUNT(animal) as Repetidos, 
							animal, 
							nombre 
					FROM 
							resultados2025 AS R
					INNER JOIN 
							animal as A 
					ON 
						A.numero = R.animal
					where 
							`codigoLoteria`= '%' and 
							 `animal`<>'-' and 
							 DAYNAME(`fecha`)=DAYNAME('*') and 
							`fecha` < '*'  and 
							`codigoSorteo` = '$'
					GROUP BY 
							`animal` 
					order by 
							Repetidos DESC;
					";	   
    
}

?>
