<?php


class M_SecuenciaSorteo extends GestionarDB
{
	public $query="
					SELECT 
							count(animal), 
							animal, 
							nombre, 
							MAX(fecha), 
							sector,
							fila
							 
					FROM 
							resultados2025 as r 
					inner join 
							animal as a 
					on 
							a.numero = r.animal 
					WHERE 
							`fecha` IN ( 
										SELECT 
												DATE_ADD(`fecha`, INTERVAL 1 DAY) 
										FROM 
												resultados2025 
										where 
												`animal`='&' and 
												`codigoLoteria`='%' and 
												codigoSorteo = '$' ) and 
							codigoLoteria='%' and 
							codigoSorteo = '$' and 
							fecha< '*'
							group by animal 
							order by fecha DESC
							; 
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
