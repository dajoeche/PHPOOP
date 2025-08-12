<?php


class Animales extends PronosticarPorSector
{
	public $query="SELECT numero, nombre, sumade, color, posicion, sector, fila FROM `animal`; ";	

    function __construct($loteria) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirLoteriaQuery($loteria);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->query = $this->queryOriginal;

		//echo "----------------------------------------------------------<br>";
		$this->close();
    }		
}

?>
