<?php


class Sumade extends GestionarDB
{
	public $query="
					SELECT 
							count(sumade) as repe, 
							sumade 
					FROM 
							resultados2025 
					inner join 
							animal 
					on 
							numero=animal 
					where 
							fecha IN (
										select 
												DATE_ADD(fecha, INTERVAL 1 DAY) 
										from 
												resultados2025 
										inner join 
												animal 
										on 
												numero=animal 
										where 
												sumade = '#' and 
												codigoLoteria = '%' and 
												codigoSorteo='$'
									  ) and 
							codigoLoteria = '%' and 
							codigoSorteo='$' and 
							fecha < '*'
										group by 
												sumade 
										ORDER BY 
												repe DESC
				 ";	

    function __construct($fecha, $loteria, $sorteo, $sumade) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirFechaQuery($fecha);
		$this->incluirLoteriaQuery($loteria);
		$this->incluirSorteoQuery($sorteo);
		$this->incluirSumadeQuery($sumade);
		$this->ejecutarQuery();
		$this->imprimirQuery();

		$this->close();
    }	
}

?>
