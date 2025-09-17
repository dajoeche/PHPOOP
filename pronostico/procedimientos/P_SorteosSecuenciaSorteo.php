<?php
date_default_timezone_set('America/Caracas');
class P_SorteosSecuenciaSorteo extends  P_MarcarSorteos
{
  use MArray;
  use Utilitario;
  
  public $itemsTabla;
  public $switch='OFF';
  public $animal;
  public $sorteo;
  public $animalPorSorteo;
  public $secuencia;
  public $loteria;
  public $limiteSecuencia=12;
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
 
     
	public function buscarResultados() {
		$this->runObjeto('M_ResultadosCodigoSorteo');
		/*$this->resultados = new M_ResultadosCodigoSorteo();
		$this->resultados->setFecha($this->fechaM);
		$this->resultados->setLoteria($this->loteria);
		$this->resultados->ejecutar();	*/		
	}   
    
	public function iterarResultados($resultado) {
		$this->actual=$resultado;
		$this->sorteo=$resultado[8];
		$this->ayer=$this->getAyer($this->fechaM);
		$this->tabla[$this->contador][$this->contadorColumna]= $this->actual[1];
		$this->animalPorSorteo = new M_AnimalPorSorteo();
		$this->animalPorSorteo->setFecha($this->ayer);
		$this->animalPorSorteo->setLoteria($this->loteria);
		$this->animalPorSorteo->setSorteo($this->sorteo);
		$this->animalPorSorteo->ejecutar();
		$this->secuencia = new M_SecuenciaSorteo();
		$this->secuencia->setFecha($this->fechaM);
		$this->secuencia->setLoteria($this->loteria);
		$this->secuencia->setSorteo($this->sorteo);
		$this->secuencia->setAnimal($this->animalPorSorteo->tabla[0][0]);	
		$this->secuencia->ejecutar();	
		//		echo '<pre>';
		//print_r ($this->secuencia);	
		$this->configurarFuncionRetornoExtraerFila('agregarSecuencia');
		$this->extraerFila($this->secuencia->tabla);	
		$this->contador=$this->contador+1;		
	}    
    
	public function agregarSecuencia($secuencia) {
		//echo '<pre>';
		//print_r ($this->tabla);
		if ($this->actual[1] === $secuencia[1]){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"naranja", "title"=>$secuencia[0]));	
		} 		
	}
		

}

?>
