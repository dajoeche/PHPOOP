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
 
    function __construct($fecha, $loteria, $animal) {
		$this->fecha=$fecha;
		$this->loteria=$loteria;
		$this->miNumero=$animal;
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		$date = new DateTime($this->fecha);
		$date->modify("-10 day");
		$this->fechaM = $date->format("Y-m-d");
		//echo $this->fechaM;
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->configurarFuncionRetornoExtraerColumna('agregarSorteos');
		$this->extraerColumna($this->resultados->tabla);
		$this->encabezadoTabla[0][] = $this->fechaM;
		
		$date = new DateTime($this->fecha);
		$date->modify("-9 day");
		$this->fechaM = $date->format("Y-m-d");		
		$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->extraerColumna($this->resultados->tabla);
        $this->contador = 0;
        $this->encabezadoTabla[0][] = $this->fechaM;
        
		$date = new DateTime($this->fecha);
		$date->modify("-8 day");
		$this->fechaM = $date->format("Y-m-d");		
		$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->extraerColumna($this->resultados->tabla);
        $this->contador = 0;
        $this->encabezadoTabla[0][] = $this->fechaM;
        
		$date = new DateTime($this->fecha);
		$date->modify("-7 day");
		$this->fechaM = $date->format("Y-m-d");		
		$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->extraerColumna($this->resultados->tabla);	
        $this->contador = 0;
        $this->encabezadoTabla[0][] = $this->fechaM;
        
		$date = new DateTime($this->fecha);
		$date->modify("-6 day");
		$this->fechaM = $date->format("Y-m-d");		
		$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->extraerColumna($this->resultados->tabla);		    
        $this->contador = 0;
        $this->encabezadoTabla[0][] = $this->fechaM;
        
		$date = new DateTime($this->fecha);
		$date->modify("-5 day");
		$this->fechaM = $date->format("Y-m-d");		
		$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->extraerColumna($this->resultados->tabla);	
        $this->contador = 0;
        $this->encabezadoTabla[0][] = $this->fechaM;
        
		$date = new DateTime($this->fecha);
		$date->modify("-4 day");
		$this->fechaM = $date->format("Y-m-d");		
		$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->extraerColumna($this->resultados->tabla);				
        $this->contador = 0;
        $this->encabezadoTabla[0][] = $this->fechaM;
        
		$date = new DateTime($this->fecha);
		$date->modify("-3 day");
		$this->fechaM = $date->format("Y-m-d");		
		$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->extraerColumna($this->resultados->tabla); 			
        $this->contador = 0;
        $this->encabezadoTabla[0][] = $this->fechaM;
        
		$date = new DateTime($this->fecha);
		$date->modify("-2 day");
		$this->fechaM = $date->format("Y-m-d");		
		$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->extraerColumna($this->resultados->tabla);
        $this->contador = 0;
        $this->encabezadoTabla[0][] = $this->fechaM;
        
		$date = new DateTime($this->fecha);
		$date->modify("-1 day");
		$this->fechaM = $date->format("Y-m-d");		
		$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
		$this->resultados = new Resultados($this->fechaM, $this->loteria);
		$this->extraerColumna($this->resultados->tabla);
		$this->encabezadoTabla[0][] = $this->fechaM;
    }
    
	public function agregarSorteos($resultado) {
		if ($resultado[1] === $this->miNumero){
			$this->tabla[]= array($resultado[0],$resultado[1]);		
		} else {
			$this->tabla[]= array($resultado[0],'');	
		}
			
	}    
    
	public function iterarResultados($resultado) {
		if ($resultado[1] === $this->miNumero){
			$this->tabla[$this->contador][]= $resultado[1];	
		} else {
			$this->tabla[$this->contador][]= '';	
		}
			
		$this->contador = $this->contador+1;
	}    
		

}

?>
