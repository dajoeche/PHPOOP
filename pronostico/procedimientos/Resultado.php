<?php


class Resultado extends M_BaseFechaLoteria
{
	public $query="
SELECT 
		animal, 
		nombre, 
		sector,
		codigoSorteo, 
		codigoLoteria, 
		fecha 
FROM 
		resultados2025 AS R, 
		animal as A 
where 
		A.numero = R.animal and 
		`fecha`='*' and 
		codigoLoteria = '%';  
		
";	
	
}

?>
