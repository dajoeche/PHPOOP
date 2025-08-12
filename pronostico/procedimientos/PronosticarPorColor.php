<?php


class PronosticarPorColor extends GestionarDB
{
	public $query="SELECT COUNT(a.color) as Repetidos, a.color FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.color order by Repetidos DESC;";	
	public $queryOriginal ="SELECT COUNT(a.color) as Repetidos, a.color FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.color order by Repetidos DESC;";	

    function __construct($fecha,$loteria) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirFechaQuery($fecha);
		$this->incluirLoteriaQuery($loteria);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->query = $this->queryOriginal;

		//echo "----------------------------------------------------------<br>";
		$this->close();
    }	
}

?>
