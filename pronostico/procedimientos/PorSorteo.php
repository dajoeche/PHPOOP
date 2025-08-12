<?php


class PorSorteo extends PronosticarPorSector
{
	public $query="SELECT 
							animal, 
							nombre, 
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
						`codigoSorteo` LIKE '$' 
				   order by 
							fecha desc; ";	

    function __construct($loteria, $sorteo) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirLoteriaQuery($loteria);
		$this->incluirSorteoQuery($sorteo);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->close();
    }	
}

?>
