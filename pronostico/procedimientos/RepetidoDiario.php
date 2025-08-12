<?php


class RepetidoDiario extends PronosticarPorSector
{
	public $query="
					SELECT 
							count(animal), 
							animal, 
							nombre,
							max(fecha) 
					FROM 
							`resultados2025` 
					INNER JOIN 
							animal
					ON 
							`resultados2025`.animal = animal.numero 
					WHERE 	`fecha` < '*' and 
							codigoLoteria='%' 
					group by 
							animal, 
							fecha 
					having 
							count(animal) > 1  
					ORDER BY 
							`max(fecha)` 
					DESC	
	";	


    function __construct($fecha,$loteria) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirFechaQuery($fecha);
		$this->incluirLoteriaQuery($loteria);
		$this->ejecutarQuery();
		$this->imprimirQuery();

		//echo "----------------------------------------------------------<br>";
		$this->close();
    }	
}

?>
