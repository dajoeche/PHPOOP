<?php


class M_Base extends GestionarDBPronostico
{
	public $fecha;	
	public $loteria;	
	public $sorteo;	
	public $animal;	
	public $limite;	
	public $query="SELECT COUNT(a.sector) as Repetidos, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.sector order by Repetidos DESC;";	
	public $queryOriginal ="SELECT COUNT(a.sector) as Repetidos, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= '%' and `fecha` = '*'  GROUP BY A.sector order by Repetidos DESC;";	

    function ejecutar() {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirVariablesQuery();
		$this->ejecutarQuery();
		$this->imprimirQuery();
		$this->query = $this->queryOriginal;
		$this->close();
    }
 
    function incluirVariablesQuery() {
		//$this->incluirLoteriaQuery($this->loteria);
    }
    public function setAyer($fecha) { $this->fecha = $fecha; }	
    public function setFecha($fecha) { $this->fecha = $fecha; }     	
    public function setLoteria($loteria) { $this->loteria = $loteria; }     	
    public function setAnimal($animal) { $this->animal = $animal; }     	
    public function setSorteo($sorteo) { $this->sorteo = $sorteo; }     	
    public function setLimite($limite) { $this->limite = $limite; }     	
    public function setLimiteDiario($limite) { $this->limite = $limite; }     	
    public function setLimitePorSorteo($limite) { $this->limite = $limite; }     	
    public function setLimiteSecuencia($limite) { $this->limite = $limite; }     	
}

?>
