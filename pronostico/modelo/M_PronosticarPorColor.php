<?php


class M_PronosticarPorColor extends M_BaseFechaLoteria
{
	public $query="SELECT COUNT(a.color) as Repetidos, a.color FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.color order by Repetidos DESC;";	
	public $queryOriginal ="SELECT COUNT(a.color) as Repetidos, a.color FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.color order by Repetidos DESC;";	
	
}

?>
