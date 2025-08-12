<?php


class M_SalioAyer extends GestionarDB
{
	public $fecha;
	public $ayer;
	public $loteria;
	public $query="
					SELECT 
							animal, 
							nombre, 
							hora 
					FROM 
							`resultados2025` AS R
					INNER JOIN 
							`animal` AS A
					ON 
							`animal`=`numero` 
					INNER JOIN 
					        `sorteo` AS S
					ON 
					          R.`codigoSorteo`=S.`codigoSorteo` 
					WHERE 
							`animal` IN 
										(	SELECT 
													`animal` 
											FROM 
													`resultados2025` 
											WHERE 
													`codigoLoteria` = '%' AND 
													`fecha` = '*') AND 
							`codigoLoteria` = '%' AND 
							`fecha` = '$'; 
				 ";	

    function __construct() {
    }	
    
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
