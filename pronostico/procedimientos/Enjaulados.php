<?php


class Enjaulados extends PronosticarCategoria
{
	public $query="SELECT DATEDIFF ('*',max(fecha )) as dias_sin_salir, max(fecha), R.animal, A.nombre FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= 'LAC' and `fecha` < '*' GROUP BY R.animal order BY dias_sin_salir DESC; ";	
	
}

?>
