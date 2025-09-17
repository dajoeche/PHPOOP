<?php


class M_BaseFechaLoteriaAyer extends GestionarDBPronostico
{
	public $fecha;
	public $loteria;
	public $sorteo;
	public $query="SELECT COUNT(a.sector) as Repetidos, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.sector order by Repetidos DESC;";	
	public $queryOriginal ="SELECT COUNT(a.sector) as Repetidos, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.sector order by Repetidos DESC;";	

    
    function ejecutar() {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirFechaQuery($this->fecha);
		$this->incluirLoteriaQuery($this->loteria);
		$this->cambiarIndentificadorFecha('$');
		$this->incluirFechaQuery($this->ayer);
		$this->restaurarIndentificadorFecha();
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->close();
     }	
    
    public function setLoteria($loteria) { $this->loteria = $loteria; }
    public function setFecha($fecha) { $this->fecha = $fecha; }
    public function setAyer($ayer) { $this->ayer = $ayer; }
 	
}

?>
