<?php


class SecuenciaLimit8 extends GestionarDB
{
	public $query="
					SELECT 
							count(animal) as repetido, 
							animal, 
							a.nombre, 
							sector, 
							fila
					FROM 
							resultados2025 as r 
					inner join 
							animal as a on a.numero = r.animal 
					WHERE 
							`fecha` IN (
										SELECT 
												DISTINCT(DATE_ADD(fecha, INTERVAL 1 DAY)) 
										FROM 
												resultados2025 
										where 
												`animal`='&' and 
												`codigoLoteria`='%' and 
												codigoSorteo = '$') and 
							codigoLoteria='%' and 
							`fecha`< '*' and 
							codigoSorteo > '0'
					GROUP BY 
							animal 
					ORDER BY 
							`repetido`
					DESC 
					LIMIT @ 
";	

    function __construct($fecha, $loteria, $animal, $sorteo, $limite) {
		$this->conectar();
		$this->checarEstatusConexion();
			$this->incluirFechaQuery($fecha);
			$this->incluirAnimalQuery($animal);
			$this->incluirLoteriaQuery($loteria);
			$this->incluirSorteoQuery($sorteo);
			$this->incluirLimiteQuery($limite);
			$this->ejecutarQuery();
			$this->imprimirQuery();
		$this->close();
    }		
}

?>
