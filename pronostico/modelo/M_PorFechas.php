<?php


class M_PorFechas extends M_BaseFechaLoteria
{
	public $query="
SELECT 
		hora, 	
        (
         SELECT 
            	count(animal) 
         from 
            	resultados2025 as a 
         WHERE 
            	a.animal = R.animal and 
            	`fecha` < '*' and
      			`codigoLoteria`= '%' and 
            	a.`codigoSorteo` = R.`codigoSorteo`
         group by 
            	animal) as repe,
        numero,
        nombre, 
        sumaDe,
        color,
        posicion,
        (
         SELECT 
            	max(fecha)  
          from 
            	resultados2025 as d 
          WHERE 
            	d.animal = R.animal and 
            	`fecha` < '*' and
      			`codigoLoteria`= '%' and 
            	d.`codigoSorteo` = R.`codigoSorteo` 
           group by animal) as ultimaFecha,
        (
         SELECT 
            	DATEDIFF ('*',max(fecha))  
          from 
            	resultados2025 as c 
          WHERE 
            	c.animal = R.animal and 
            	`fecha` < '*' and
      			`codigoLoteria`= '%' and 
            	c.`codigoSorteo` = R.`codigoSorteo` 
           group by animal) as DiasSinSAlir,
           sector,
           fila
FROM 
		`resultados2025` as R
INNER JOIN 
		`animal` as A
ON 
		numero = animal 
INNER JOIN 
		sorteo as S
ON
		S.codigoSorteo = R.codigoSorteo
WHERE 	
		`fecha` = '*' and
      	`codigoLoteria`= '%';	
";	

}

?>
