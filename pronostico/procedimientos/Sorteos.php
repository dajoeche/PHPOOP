<?php
date_default_timezone_set('America/Caracas');
class Sorteos
{
  use MArray;
  use Utilitario;
  
  public $itemsTabla;
  public $animal;
  public $loteria;
  public $fechaActual = '*';
  public $fecha;
  public $fechaM;
  public $contador=0;
  public $fechaRacha;
  public $resultadoPorAnimal;
  public $resultados;
  public $tabla;
  public $fila;
  public $miNumero='3';
  public $bandera='OFF';
  public $encabezadoTabla =  array(array("Sorteo"));
 
    function __construct($fecha, $loteria) {
		$this->fecha=$fecha;
		$this->loteria=$loteria;
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		$date = new DateTime($this->fecha);
		$date->modify("-9 day");
		$this->fechaM = $date->format("Y-m-d");
		//echo $this->fechaM;
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->configurarFuncionRetornoExtraerColumna('agregarSorteos');
		$this->extraerColumna($this->resultados->tabla);
		$this->encabezadoTabla[0][] = $this->fechaM;
		
		for($i=8; $i>0; $i--){
			$date = new DateTime($this->fecha);
			$date->modify("-".$i." day");
			$this->fechaM = $date->format("Y-m-d");		
			$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
			$this->resultados = new Resultados($this->fechaM, $this->loteria);
			$this->extraerColumna($this->resultados->tabla);
			$this->contador = 0;
			$this->encabezadoTabla[0][] = $this->fechaM;
		}

		
    }
    
	public function agregarSorteos($resultado) {

		$this->tabla[]= array($resultado[0],$resultado[1]);				
	}    
    
	public function iterarResultados($resultado) {

		$this->tabla[$this->contador][]= $resultado[1];		
		$this->contador = $this->contador+1;
	}    
		

}

?>
