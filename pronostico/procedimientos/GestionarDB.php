<?php

class GestionarDB
{
	public $servidor="localhost";	
	public $usuario="root";	
	public $clave="L4v1d43ndb**01";	
	public $baseDeDatos="animalitos";	
	public $nombreTabla="resultados2025";	
	public $numeroRegistroDB;	
	public $numeroRegistro;	
	public $codigoSorteo = 0;	
	public $codigoLoteria = 'LAC';	
	public $resultado;	
	public $query;
	public $resultadoQuery;
	public $mysqli;
	public $tabla= array();
	public $fila= array();

    function __construct() {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->buscarNumeroRegistro();
		$this->obtenerNumeroRegistro();
		$this->guardarResultado();
		//echo $db->numeroRegistro;
		//echo "----------------------------------------------------------<br>";
		$this->close();
    }
    
    public function conectar() {
        $this->mysqli = new mysqli($this->servidor, $this->usuario, $this->clave, $this->baseDeDatos);	       
    }	

    public function checarEstatusConexion() {
		if ($this->mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
		}       
    }

    public function buscarNumeroRegistro() {
		$this->numeroRegistrosDb = $this->mysqli->query("SELECT COUNT(*) FROM `".$this->nombreTabla."`;");      
    }	

    public function obtenerNumeroRegistro() {
 		while ($row = $this->numeroRegistrosDb->fetch_assoc()) {
			$this->numeroRegistro = $row["COUNT(*)"];
		}              
    }	

    public function existe() {
		$this->existe = $this->mysqli->query("SELECT * FROM `".$this->nombreTabla."` WHERE `fecha` = '".$this->fecha."' and `codigoSorteo`= '".$this->codigoSorteo."' and `codigoLoteria`= '".$this->codigoLoteria."';");               
    }						

    public function ejecutarQuery() {
		$this->resultadoQuery = $this->mysqli->query($this->query);               
    }						

    public function imprimirQuery() {
		echo '<pre>';
 		while ($row = $this->resultadoQuery->fetch_assoc()) {
			foreach ($row as $valor){
			$this->fila[]= $valor;
		   }
		   array_push($this->tabla, $this->fila);
		   unset($this->fila);
		}	
		//print_r($this->tabla);	
		echo '</pre>';          
    }						

    public function guardarResultado() {
		foreach ($this->resultados as $valor){ 
			    $this->codigoSorteo =  $this->codigoSorteo+1;
			    $this->numeroRegistro =  $this->numeroRegistro+1;
				echo '<pre>';
				echo $valor;
				$this->existe();
				if (mysqli_num_rows($this->existe) < 1) {
					$this->mysqli->query("INSERT INTO `".$this->nombreTabla."` (`codigoResultado`, `fecha`, `animal`, `codigoLoteria`, `codigoSorteo`) VALUES ('".$this->numeroRegistro."', '".$this->fecha."', '".$valor."', '".$this->codigoLoteria."', '".$this->codigoSorteo."')");
				}
				echo '</pre>';
		}     
    }	

    public function incluirFechaQuery($fecha) {
        $this->query = str_replace('*',$fecha,$this->query);	       
    }	

    public function close() {
        $this->mysqli->close();	       
    }	

}


?>
