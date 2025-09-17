<?php
date_default_timezone_set('America/Caracas');
class P_MarcarSorteos
{
  use MArray;
  use Utilitario, MObjetoInterno;
  
  public $itemsTabla;
  public $animal;
  public $loteria;
  public $fechaActual = '*';
  public $contadorColumna=0;	
  public $fechafec;
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
  public $titulo =  "Sorteos";
  public $encabezadoTabla =  array(array("Sorteo"));

  public $criterios =[
						"buscarResultado"=>["objeto"=>'M_Resultados',"funcion"=>'objetoFechaLoteria'],
					   ];
    
    public function ejecutar(){
		$this->fechafec = $this->fecha;
		for($i=16; $i>0; $i--){
			$date = new DateTime($this->fechafec);
			$date->modify("-".$i." day");
			$this->fechaM = $date->format("Y-m-d");		
			$this->configurarFuncionRetornoExtraerColumna('iterarResultados');
			$this->buscarResultados();
			$this->extraerColumna($this->resultados->tabla);
			$this->contador = 0;
			$this->contadorColumna= $this->contadorColumna+1;
			$this->encabezadoTabla[0][] = str_replace('2025-','',$this->fechaM);
		}
		
		$this->configurarFuncionRetornoExtraerColumna('agregarSorteos');
		$this->extraerColumna($this->resultados->tabla);
    }
    
	public function agregarSorteos($resultado) {
		array_unshift($this->tabla[$this->contador],$resultado[0]);	
		$this->contador=$this->contador+1;			
	}    
    
	public function iterarResultados($resultado) {
		$this->tabla[$this->contador][]= $resultado[1];		
		$this->contador = $this->contador+1;
	}    
    
	public function buscarResultados() { 
		$this->runObjeto('M_Resultados');	
	}    
    
	public function runObjeto($objeto) { 
		$this->resultados = new $objeto();
		$this->resultados->setFecha($this->fechaM);
		$this->resultados->setLoteria($this->loteria);
		$this->resultados->ejecutar();	
	} 			
}

?>
