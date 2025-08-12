<?php


class Calendario extends PronosticarPorSector
{
	public $query="SELECT * FROM `resultados2025` WHERE `animal` = '&' AND `codigoLoteria` LIKE '%'  ORDER BY `codigoResultados` ASC ";	

    function __construct($animal, $loteria) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirAnimalQuery($animal);		
		$this->incluirLoteriaQuery($loteria);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->query = $this->queryOriginal;
		$this->close();
    }	
	
}

?>
