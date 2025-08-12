<?php


class ResultadoPorAnimal extends PronosticarPorSector
{
	public $query="SELECT DISTINCT(fecha) FROM `resultados2025` WHERE codigoLoteria = '%' and animal = '&'  and fecha < '*' ORDER BY `resultados2025`.`fecha` DESC; ";	

    function __construct($animal, $loteria, $fecha) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirLoteriaQuery($loteria);
		$this->incluirAnimalQuery($animal);
		$this->incluirFechaQuery($fecha);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->query = $this->queryOriginal;

		//echo "----------------------------------------------------------<br>";
		$this->close();
    }		
}

?>
