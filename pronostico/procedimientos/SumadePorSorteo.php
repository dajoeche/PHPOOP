<?php


class SumadePorSorteo extends GestionarDB
{
	public $query="SELECT 
							sumade,
							animal, 
							nombre, 							 
							color, 
							posicion, 
							sector, 
							fila, 
							fecha 
				   FROM 
						`resultados2025`
				   INNER JOIN 
						 animal
				   ON 
						animal = numero   
				   WHERE 				
						`codigoLoteria` LIKE '%' AND 
						`codigoSorteo` LIKE '$'  AND 
						`fecha` = '*' 			
				   order by 
							fecha desc; ";	
		public $sumade;

    function __construct($loteria, $sorteo, $fecha) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirLoteriaQuery($loteria);
		$this->incluirSorteoQuery($sorteo);
		$this->incluirFechaQuery($fecha);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->close();
		$this->sumade = $this->tabla[0][0];
    }	
}

?>
