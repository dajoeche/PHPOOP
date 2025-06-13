<?php


class PorFechasDiario extends GestionarDB
{
	public $query="
	
					SELECT 
							hora, 
							0 as repetidos, 
							R.animal, 
							A.nombre, 
							sumade,
							color, 
							posicion, 
							'-' , 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir,  
							a.sector,
							a.fila
					FROM 
							resultados2025 AS R
					inner join 
								animal as A
					on
							A.numero = R.animal
					inner join sorteo as S
					on 
							S.codigoSorteo = R.codigoSorteo
					where 
							`codigoLoteria`= '%' and 
							animal = '&'  
					having  
							min(fecha )='*'
					UNION 	
					SELECT 
							hora, 
							COUNT(animal) as Repetidos, 
							R.animal, 
							A.nombre, 
							sumade,
							color, 
							posicion, 
							max(fecha), 
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							a.sector, 
							a.fila 
					FROM 
							resultados2025 AS R
					inner join 
								animal as A
					on
							A.numero = R.animal
					inner join sorteo as S
					on 
							S.codigoSorteo = R.codigoSorteo
					where 
							`codigoLoteria`= '%' and 
							`fecha`<'*' and 
							animal = '&'  
					GROUP BY 
							R.animal ; ";	
	public $queryOriginal="
	
					SELECT 
							hora, 
							0 as repetidos, 
							R.animal, 
							A.nombre, 
							sumade,
							color, 
							posicion, 
							'-' , 
							DATEDIFF ('*', '2025-01-02') as dias_sin_salir,  
							a.sector,
							a.fila
					FROM 
							resultados2025 AS R
					inner join 
								animal as A
					on
							A.numero = R.animal
					inner join sorteo as S
					on 
							S.codigoSorteo = R.codigoSorteo
					where 
							`codigoLoteria`= '%' and 
							animal = '&'  
					having  
							min(fecha )='*'
					UNION 	
					SELECT 
							hora, 
							COUNT(animal) as Repetidos, 
							R.animal, 
							A.nombre, 
							sumade,
							color, 
							posicion, 
							max(fecha), 
							DATEDIFF ('*',max(fecha )) as dias_sin_salir, 
							a.sector, 
							a.fila 
					FROM 
							resultados2025 AS R
					inner join 
								animal as A
					on
							A.numero = R.animal
					inner join sorteo as S
					on 
							S.codigoSorteo = R.codigoSorteo
					where 
							`codigoLoteria`= '%' and 
							`fecha`<'*' and 
							animal = '&'  
					GROUP BY 
							R.animal ;";	

    function __construct($fecha, $resultadoTabla) {
		$this->conectar();
		$this->checarEstatusConexion();
		//echo "<pre>";
		foreach ($resultadoTabla as $valor){
			$this->incluirFechaQuery($fecha);
			$this->incluirAnimalQuery($valor[0]);
			$this->incluirLoteriaQuery($valor[4]);
			$this->ejecutarQuery();
			$this->imprimirQuery();
			$this->query = $this->queryOriginal;
		}
		$this->close();
    }	
}

?>
