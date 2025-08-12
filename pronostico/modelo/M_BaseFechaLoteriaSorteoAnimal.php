<?php


class M_BaseFechaLoteriaSorteoAnimal extends GestionarDB
{
	public $query="";	

    function __construct($fecha, $loteria, $sorteo, $animal) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirFechaQuery($fecha);
		$this->incluirLoteriaQuery($loteria);			
		$this->incluirSorteoQuery($sorteo);
		$this->incluirAnimalQuery($animal);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->close();
    }		
}

?>
