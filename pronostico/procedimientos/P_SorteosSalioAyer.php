<?php
date_default_timezone_set('America/Caracas');
class P_SorteosSalioAyer extends  P_MarcarSorteos
{
  use MArray;
  use Utilitario;
  
  public $itemsTabla;
  public $switch='OFF';
  public $animal;
  public $loteria;
  public $fechaActual = '*';
  public $ayer;
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
		$this->configurarFuncionRetornoExtraerFila('agregarSalidaAyer');
		$this->extraerFila($this->resultadosAyer->tabla);	
		$this->contador=$this->contador+1;		
	}    
    
	public function agregarSalidaAyer($resultadoAyer) {
		if ($this->actual[1] === $resultadoAyer[1]){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"amarillo"));	
		} 		
	}	
    
	public function buscarResultadosAyer() {
		$this->ayer=$this->getAyer($this->fechaM);
		$this->tabla[$this->contador][$this->contadorColumna]= $this->actual[1];
		$this->resultadosAyer = new M_Resultados();
		$this->resultadosAyer->setFecha($this->ayer);
		$this->resultadosAyer->setLoteria($this->loteria);
		$this->resultadosAyer->ejecutar();			
	}
}

?>
