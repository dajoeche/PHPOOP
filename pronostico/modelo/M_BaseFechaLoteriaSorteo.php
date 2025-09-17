<?php


class M_BaseFechaLoteriaSorteo extends M_Base
{
	public $fecha;
	public $loteria;
	public $sorteo;
	public $resultados;
	public $query="SELECT COUNT(a.sector) as Repetidos, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.sector order by Repetidos DESC;";	
	public $queryOriginal ="SELECT COUNT(a.sector) as Repetidos, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.sector order by Repetidos DESC;";	

    function ejecutar() {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirFechaQuery($this->fecha);//*
		$this->incluirLoteriaQuery($this->loteria);
		$this->incluirSorteoQuery($this->sorteo);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->query = $this->queryOriginal;
		$this->close();
    }

    public function setLoteria($loteria) { $this->loteria = $loteria; }
    public function setFecha($fecha) { $this->fecha = $fecha; }
    public function setSorteo($sorteo) { $this->sorteo = $sorteo; }	
}

?>
