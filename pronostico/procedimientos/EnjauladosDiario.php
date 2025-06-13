<?php


class EnjauladosDiario extends PronosticarCategoria
{
	public $query="
					SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir, 
							'2025-01-02', 
							numero, 
							nombre, 
							sector 
					FROM 
							`animal` 
					where 
							numero not in (
											SELECT 
													animal 
											from 
													`resultados2025` 
											where 
													`codigoLoteria`= '%' and 
													`fecha` < '*' 
											) 
					UNION 
					SELECT 
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							max(fecha), 
							R.animal, 
							A.nombre, 
							A.sector 
					FROM 
							resultados2025 AS R, 
							animal as A 
					where 
							A.numero = R.animal and 
							`codigoLoteria`= '%' and 
							`fecha` < '*' 
					GROUP BY 
							R.animal 
					ORDER BY 
							dias_sin_salir 
					DESC; 	
	";	
	public $queryOriginal ="
					SELECT 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir, 
							'2025-01-02', 
							numero, 
							nombre, 
							sector 
					FROM 
							`animal` 
					where 
							numero not in (
											SELECT 
													animal 
											from 
													`resultados2025` 
											where 
													`codigoLoteria`= '%' and 
													`fecha` < '*' 
											) 
					UNION 
					SELECT 
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							max(fecha), 
							R.animal, 
							A.nombre, 
							A.sector 
					FROM 
							resultados2025 AS R, 
							animal as A 
					where 
							A.numero = R.animal and 
							`codigoLoteria`= '%' and 
							`fecha` < '*' 
					GROUP BY 
							R.animal 
					ORDER BY 
							dias_sin_salir 
					DESC;	
	";	

    function __construct($fecha,$loteria,$sorteo) {
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
