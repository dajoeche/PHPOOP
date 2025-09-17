<?php
date_default_timezone_set('America/Caracas');
class P_SorteosExtremos extends  P_SorteosSalioAyer
{
  use MArray;
  use Utilitario;
  
  public $itemsTabla;
  public $switch='OFF';
  public $animal;
  public $loteria;
  public $fechaActual = '*';
  public $ayer;
  public $primerSorteo;
  public $ultimoSorteo;
  public $actual;
  public $fecha;
  public $fechaM;
  public $contador=0;
  public $fechaRacha;
  public $resultadosAyer;
  public $resultadoPorAnimal;
  public $resultados;
  public $tabla;
  public $fila;
  public $miNumero='3';
  public $bandera='OFF';
  public $encabezadoTabla =  array(array("Sorteo")); 
    
	public function iterarResultados($resultado) {
		$this->actual=$resultado;
		$this->buscarResultadosAyer();
		$this->primerSorteo=$this->resultadosAyer->tabla[0][1];
		if ($this->loteria=="RLA"){
			$this->ultimoSorteo=$this->resultadosAyer->tabla[10][1];
		} else {
			$this->ultimoSorteo=$this->resultadosAyer->tabla[11][1];
		}
		
		$this->agregarSalidaAyer($this->actual);
		$this->contador=$this->contador+1;		
	}    
    
	public function agregarSalidaAyer($resultadoAyer) {
		if ($this->actual[1] === $this->primerSorteo){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"amarillo"));	
		} 		
		
		if ($this->actual[1] === $this->ultimoSorteo){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"rojo"));	
		} 	
			
	}	

}

?>
