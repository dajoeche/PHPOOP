<?php


class PronosticarCategoria extends GestionarDB
{
	public $query="SELECT COUNT(a.sector) as Repetidos, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= 'LAC' and `fecha` = '*'  GROUP BY A.sector order by Repetidos DESC;";	

    function __construct($fecha) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirFechaQuery($fecha);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		

		echo "----------------------------------------------------------<br>";
		$this->close();
    }	
}

?>
