<?php


class CalendarioFecha extends PronosticarCategoria
{
	public $query="SELECT * FROM `resultados2025` where day(fecha) = animal and codigoLoteria = '%'; ";	

    function __construct($loteria) {
		$this->conectar();
		$this->checarEstatusConexion();		
		$this->incluirLoteriaQuery($loteria);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->query = $this->queryOriginal;
		$this->close();
    }	
	
}

?>
