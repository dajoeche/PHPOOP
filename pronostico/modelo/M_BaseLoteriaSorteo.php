<?php


class M_BaseLoteriaSorteo extends M_Base
{
	public $query="SELECT COUNT(a.sector) as Repetidos, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.sector order by Repetidos DESC;";	
	public $queryOriginal ="SELECT COUNT(a.sector) as Repetidos, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.sector order by Repetidos DESC;";	

    function incluirVariablesQuery() {
		$this->incluirLoteriaQuery($this->loteria);
		$this->incluirSorteoQuery($this->sorteo);
    }	
}

?>
