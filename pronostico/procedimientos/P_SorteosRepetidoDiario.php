<?php
date_default_timezone_set('America/Caracas');
class P_SorteosRepetidoDiario extends  P_MarcarSorteos
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
  public $repetidoDiario;
  public $repetidoAyer;
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
		$this->ayer=$this->getAyer($this->fechaM);
		$this->tabla[$this->contador][$this->contadorColumna]= $this->actual[1];
		$this->repetidoDiario = new M_RepetidoDiarioPorDia();
		$this->repetidoDiario->setFecha($this->fechaM);
		$this->repetidoDiario->setLoteria($this->loteria);
		$this->repetidoDiario->ejecutar();
		$this->configurarFuncionRetornoExtraerFila('agregarRepetidoDiario');
		$this->extraerFila($this->repetidoDiario->tabla);	
		$this->repetidoAyer = new M_RepetidoDiarioPorDia();
		$this->repetidoAyer->setFecha($this->ayer);
		$this->repetidoAyer->setLoteria($this->loteria);
		$this->repetidoAyer->ejecutar();
		$this->configurarFuncionRetornoExtraerFila('agregarRepetidoAyer');
		$this->extraerFila($this->repetidoAyer->tabla);
				
		$this->contador=$this->contador+1;		
	}    
    
	public function agregarRepetidoDiario($repetidoDiario) {
		//echo '-------------------------------------------------------------------'.$this->actual[1].' - '.$repetidoDiario[1].'<br>';
		if ($this->actual[1] === $repetidoDiario[1]){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"amarillo"));	
		} 
	}		
    
	public function agregarRepetidoAyer($repetidoAyer) {
		if ($this->actual[1] === $repetidoAyer[1]){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"rojo"));	
		} 		
	}
		

}

?>
