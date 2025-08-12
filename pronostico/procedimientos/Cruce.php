<?php


class Cruce extends PronosticarPorSector
{
	public $query="
					SELECT  
							animal
					FROM 
							`resultados2025`  AS r
					WHERE 
							`fecha` = '*' AND 
							`codigoLoteria` LIKE '%'; ";	
							

function __construct($fecha, $loteria) {
		$this->conectar();
		$this->checarEstatusConexion();
			$this->incluirFechaQuery($fecha);
			$this->incluirLoteriaQuery($loteria);
			$this->ejecutarQuery();
			$this->imprimirQuery();
		$this->close();
    }
	
}

?>
