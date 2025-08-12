<?php


class PorSorteoLimit extends PronosticarPorSector
{
	public $query="SELECT 							 
							nombre, 
							animal,
							sumade, 
							color, 
							posicion, 
							sector, 
							fila, 
							fecha 
				   FROM 
						`resultados2025`, 
						 animal 
				   WHERE 
						animal = numero  AND 
						`codigoLoteria` LIKE '%' AND 
						`codigoSorteo` LIKE '$' AND 
						fecha < '*'
				   order by 
							fecha desc
					LIMIT @";	

    function __construct($fecha, $loteria, $sorteo, $limite) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirFechaQuery($fecha);
		$this->incluirLoteriaQuery($loteria);
		$this->incluirLimiteQuery($limite);
		$this->incluirSorteoQuery($sorteo);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->close();
    }	
}

?>
