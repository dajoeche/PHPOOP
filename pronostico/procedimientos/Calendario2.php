<?php


class Calendario2 extends PronosticarPorSector
{
	public $query="SELECT * FROM `resultados2025` WHERE (`animal` = '&' AND `codigoLoteria` LIKE '%') or (`animal` = '!' AND `codigoLoteria` LIKE '%')  ORDER BY `codigoResultados` ASC ";	

    function __construct($animal, $animal2, $loteria) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirAnimalQuery($animal);		
		$this->incluirAnimal2Query($animal2);		
		$this->incluirLoteriaQuery($loteria);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->query = $this->queryOriginal;
		$this->close();
    }	
	
}

?>
