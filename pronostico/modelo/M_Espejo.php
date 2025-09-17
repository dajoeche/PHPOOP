<?php


class M_Espejo extends M_BaseFechaLoteriaSorteoAnimal
{
	public $query="

SELECT 
		COUNT(r.animal) as Repetidos, 
		r.animal, 
		a.nombre, 
		a.sector, 
		a.fila 
FROM 
		(SELECT 
				`fecha`,
				`animal`,
				`codigoLoteria`,
				`codigoSorteo` 
		 FROM 
				resultados2025 
		 WHERE 
				`codigoLoteria`='%' and 
				`animal`= '&' and 
				fecha < '*' and 
				`codigoSorteo`='$') as mis, 
		resultados2025 as r,
		 animal as a 
where 
		(mis.fecha = r.fecha and 
		 a.numero = r.animal and 
		 r.codigoLoteria = '%' and 
		 mis.`codigoSorteo` = r.`codigoSorteo`-1) or
		(mis.fecha = r.fecha and 
		 a.numero = r.animal and 
		 r.codigoLoteria = 'LAC' and 
		 mis.`codigoSorteo` = r.`codigoSorteo`-2) or 
		(mis.fecha = r.fecha and 
		 a.numero = r.animal and 
		 r.codigoLoteria = 'LAC' and 
		 mis.`codigoSorteo` = r.`codigoSorteo`-3) or 
	   (mis.fecha = r.fecha and 
	    a.numero = r.animal and 
	    r.codigoLoteria = 'LAC' and 
	    mis.`codigoSorteo` = r.`codigoSorteo`-4) or 
	   (mis.fecha = r.fecha and 
	    a.numero = r.animal and 
	    r.codigoLoteria = 'LAC' and 
	    mis.`codigoSorteo` = r.`codigoSorteo`-5) 
GROUP BY 
		R.animal 
order by 
		Repetidos 
DESC;  " ;	
	public $queryOriginal="SELECT COUNT(r.animal) as Repetidos, r.animal, a.nombre, a.sector FROM (SELECT `fecha`,`animal`,`codigoLoteria`,`codigoSorteo` FROM resultados2025 WHERE `codigoLoteria`='%' and `animal`= '&' and fecha < '*' and `codigoSorteo`='$') as mis, resultados2025 as r, animal as a where (mis.fecha = r.fecha and a.numero = r.animal and r.codigoLoteria = '%' and mis.`codigoSorteo` = r.`codigoSorteo`-1) or (mis.fecha = r.fecha and a.numero = r.animal and r.codigoLoteria = 'LAC' and mis.`codigoSorteo` = r.`codigoSorteo`-2) or (mis.fecha = r.fecha and a.numero = r.animal and r.codigoLoteria = 'LAC' and mis.`codigoSorteo` = r.`codigoSorteo`-3) or (mis.fecha = r.fecha and a.numero = r.animal and r.codigoLoteria = 'LAC' and mis.`codigoSorteo` = r.`codigoSorteo`-4) or (mis.fecha = r.fecha and a.numero = r.animal and r.codigoLoteria = 'LAC' and mis.`codigoSorteo` = r.`codigoSorteo`-5) GROUP BY R.animal order by Repetidos DESC;  ";		
}

?>
