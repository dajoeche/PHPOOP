<?php


class Secuencia extends GestionarDB
{
	public $query="
					SELECT 
							count(animal) as repetido, 
							animal, 
							a.nombre, 
							sector, 
							fila, 
							MAX(fecha),
							DATEDIFF ('*',max(fecha )) as dias_sin_salir 
					FROM 
							resultados2025 as r 
					inner join 
							animal as a on a.numero = r.animal 
					WHERE 
							`fecha` IN (SELECT DISTINCT(fecha) FROM resultados2025 where `animal`='&' and `codigoLoteria`='%' and codigoSorteo > '$') and 
							codigoLoteria='%' and 
							`fecha`< '*' 
					GROUP BY 
							animal 
					ORDER BY 
							`repetido` 
					DESC; 
";	

    function __construct($fecha, $loteria, $animal, $sorteo) {
		$this->conectar();
		$this->checarEstatusConexion();
			$this->incluirFechaQuery($fecha);
			$this->incluirAnimalQuery($animal);
			$this->incluirLoteriaQuery($loteria);
			$this->incluirSorteoQuery($sorteo);
			$this->ejecutarQuery();
			$this->imprimirQuery();
		$this->close();
    }		
}

?>
