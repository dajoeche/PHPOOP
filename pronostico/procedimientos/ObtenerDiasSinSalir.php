<?php

class ObtenerDiasSinSalir extends GestionarDB
{
  use Utilitario, MArray;

	public $query="SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir 
				   FROM 
							resultados2025 AS R
				   where 
							`codigoLoteria`= '%' and 
							animal = '&' and 
							`codigoSorteo`= '$' 
				   having 
							min(fecha )='*'
				   UNION
				   SELECT 
							DATEDIFF ('*', max(fecha)) as dias 
				   FROM 
							`resultados2025` 
				   WHERE 
							`animal` = '&' and 
							`fecha` < '*' and 
							`codigoSorteo` = '$' and 
							`codigoLoteria` = '%';  ";	

	public $queryOriginal="SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir 
				   FROM 
							resultados2025 AS R
				   where 
							`codigoLoteria`= '%' and 
							animal = '&' and 
							`codigoSorteo`= '$' 
				   having 
							min(fecha )='*'
				   UNION
				   SELECT 
							DATEDIFF ('*', max(fecha)) as dias
				   FROM 
							`resultados2025` 
				   WHERE 
							`animal` = '&' and 
							`fecha` < '*' and 
							`codigoSorteo` = '$' and 
							`codigoLoteria` = '%';  ";						

    function __construct($animal,  $fecha, $sorteo, $loteria) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirLoteriaQuery($loteria);
		$this->incluirAnimalQuery($animal);
		$this->incluirFechaQuery($fecha);
		$this->incluirSorteoQuery($sorteo);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->query = $this->queryOriginal;

		//echo "----------------------------------------------------------<br>";
		$this->close();
		//echo "<pre>";
		//print_r($this->tabla);
    }	 
      

}

?>
