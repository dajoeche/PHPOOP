<?php

class ObtenerDiasSinSalirDiario extends GestionarDB
{
  use Utilitario, MArray;

	public $query="SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir , '-'
				   FROM 
							resultados2025 AS R
				   where 
							`codigoLoteria`= '%' and 
							animal = '&'
				   having 
							min(fecha )='*'
				   UNION
				   SELECT 
							DATEDIFF ('*', max(fecha)) as dias,  `codigoSorteo` 
				   FROM 
							`resultados2025` 
				   WHERE 
							`animal` = '&' and 
							`fecha` < '*' and 
							`codigoLoteria` = '%';  ";	

	public $queryOriginal="SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir, '-' 
				   FROM 
							resultados2025 AS R
				   where 
							`codigoLoteria`= '%' and 
							animal = '&'
				   having 
							min(fecha )='*'
				   UNION
				   SELECT 
							DATEDIFF ('*', max(fecha)) as dias,  `codigoSorteo` 
				   FROM 
							`resultados2025` 
				   WHERE 
							`animal` = '&' and 
							`fecha` < '*' and 
							`codigoLoteria` = '%';  ";						

    function __construct($animal,  $fecha, $loteria) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirLoteriaQuery($loteria);
		$this->incluirAnimalQuery($animal);
		$this->incluirFechaQuery($fecha);
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
