<?php


class M_DiaSiguiente extends M_BaseLoteriaSorteo
{
	public $query="
SELECT 
		ROW_NUMBER() OVER (ORDER BY a.fecha) AS numero_secuencial, 
        a.animal, 
        nombre,
        a.fecha 
FROM 
		`resultados2025` as A, 
        `resultados2025` as B 
INNER JOIN
	`animal` as C
ON
	B.animal = C.numero 
WHERE 
		a.fecha = date_add(b.fecha, INTERVAL 1 DAY) and 
        a.codigoLoteria = '%' and 
        a.animal = b.animal and 
        b.codigoLoteria = '%' and 
        a.codigoSorteo = '$';";	
							
}

?>
