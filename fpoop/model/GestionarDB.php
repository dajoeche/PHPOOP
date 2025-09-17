<?php
//require_once("./procedimientos/Utilitario.php");
//include_once("Utilitario.php");
class GestionarDB
{
	use Utilitario;
	public $servidor="";	
	public $usuario="";	
	public $clave="";	
	public $baseDeDatos="";	
	public $nombreTabla="";	
	public $numeroRegistroDB;	
	public $numeroRegistro;	
	public $codigoSorteo = 0;	
	public $codigoLoteria = 'LAC';	
	public $resultado;	
	public $numeroRegistrosDb;	
	public $query;
	public $existe;
	public $resultadoQuery;
	public $mysqli;
	public $tabla= array();
	public $fila= array();

    function __construct() {
		/*$this->conectar();
		$this->checarEstatusConexion();
		$this->buscarNumeroRegistro();
		$this->obtenerNumeroRegistro();
		$this->guardarResultado();
		//echo $db->numeroRegistro;
		//echo "----------------------------------------------------------<br>";
		$this->close();*/
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
		//echo $this->query.'<br>';
		$this->resultadoQuery = $this->mysqli->query($this->query);               
    }						

    public function imprimirQuery() {
		//echo '<pre>';
 		while ($row = $this->resultadoQuery->fetch_assoc()) {
			foreach ($row as $valor){
			$this->fila[]= $valor;
		   }
		   array_push($this->tabla, $this->fila);
		   unset($this->fila);
		}	
		//print_r($this->tabla);	
		//echo '</pre>';          
    }						

    public function guardarResultado() {
		foreach ($this->resultados as $valor){ 
			    $this->codigoSorteo =  $this->codigoSorteo+1;
			    $this->numeroRegistro =  $this->numeroRegistro+1;
				//echo '<pre>';
				//echo $valor."<br>";
				$this->existe();
				if (mysqli_num_rows($this->existe) < 1) {
					$this->mysqli->query("INSERT INTO `".$this->nombreTabla."` (`fecha`, `animal`, `codigoLoteria`, `codigoSorteo`) VALUES ('".$this->fecha."', '".$valor."', '".$this->codigoLoteria."', '".$this->codigoSorteo."')");
				}
				//echo '</pre>';
		}     
    }	
	
    
    public function close() {
        $this->mysqli->close();	       
    }	

}


?>
