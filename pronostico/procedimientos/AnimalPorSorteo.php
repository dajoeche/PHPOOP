<?php


class AnimalPorSorteo extends GestionarDB
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
		public $animal;

    function __construct($loteria, $sorteo, $fecha) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirLoteriaQuery($loteria);
		$this->incluirSorteoQuery($sorteo);
		$this->incluirFechaQuery($fecha);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->close();
		if (isset($this->tabla[0][0])){
			$this->animal = $this->tabla[0][0];
	    }
		
    }	
}

?>
