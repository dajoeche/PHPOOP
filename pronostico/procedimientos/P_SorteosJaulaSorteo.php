<?php
date_default_timezone_set('America/Caracas');
class P_SorteosJaulaSorteo extends  P_MarcarSorteos
{
  use MArray;
  use Utilitario;
  
  public $itemsTabla;
  public $switch='OFF';
  public $animal;
  public $loteria;
  public $sorteo;
  public $fechaActual = '*';
  public $limiteJaula = '89';
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
       
	public function buscarResultados() {
		$this->runObjeto('M_ResultadosCodigoSorteo');
	}  
	  
	public function iterarResultados($resultado) {
		$this->actual=$resultado;
		$this->ayer=$this->getAyer($this->fechaM);
		$this->sorteo=$resultado[8];
		$this->tabla[$this->contador][$this->contadorColumna]= $this->actual[1];
		$this->resultadosAyer = new M_EnjauladosPorDia();
		$this->resultadosAyer->setFecha($this->fechaM);
		$this->resultadosAyer->setLoteria($this->loteria);
		$this->resultadosAyer->setSorteo($this->sorteo);
		$this->resultadosAyer->setLimite($this->limiteJaula);
		$this->resultadosAyer->ejecutar();
		//echo '<pre>';
		//print_r ($this->resultadosAyer->tabla);
		$this->configurarFuncionRetornoExtraerFila('agregarSalidaAyer');
		$this->extraerFila($this->resultadosAyer->tabla);	
		$this->contador=$this->contador+1;		
	}    
    
	public function agregarSalidaAyer($resultadoAyer) {
		//echo '<pre>';
		//print_r ($this->tabla);
		if ($this->actual[1] === $resultadoAyer[2]){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"red", "title"=>$resultadoAyer[0]));	
		} 		
	}
		

}

?>
