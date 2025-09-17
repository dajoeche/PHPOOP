<?php
date_default_timezone_set('America/Caracas');
class P_SorteosSecuencia extends  P_MarcarSorteos
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
  public $limiteSecuencia=6;
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
  public $manejador;
  public $miNumero='3';
  public $bandera='OFF';
  public $encabezadoTabla =  array(array("Sorteo"));
 
     
	public function buscarResultados() {
		$this->resultados = new M_ResultadosCodigoSorteo();
		$this->resultados->setFecha($this->fechaM);
		$this->resultados->setLoteria($this->loteria);
		$this->resultados->ejecutar();
	}   

	public function iterarResultados($resultado) {
		//$this->imprimir($resultado);
		$this->actual=$resultado;
		$this->sorteo=$resultado[0];
		$this->ayer=$this->getAyer($this->fechaM);
		$this->tabla[$this->contador][$this->contadorColumna]= $this->actual[1];
		$this->animalPorSorteo = new M_AnimalPorSorteo();
		$this->animalPorSorteo->setLoteria($this->loteria);	
		if ($this->sorteo==='1'){
			$this->iniciarVariablesBucarAnimalPrimerSorteo();
			//$this->secuencia = new SecuenciaLimit8($this->fechaM, $this->loteria, $this->animalPorSorteo->animal, '12', $this->limiteSecuencia);
			
		} elseif($this->sorteo>'1' and $this->sorteo<'13') {	
			$this->iniciarVariablesBuscarAnimalSorteo();	
			//$this->secuencia = new SecuenciaLimit($this->fechaM, $this->loteria, $this->animalPorSorteo->animal, $this->sorteo-1, $this->limiteSecuencia);	
		} else { exit('aqui'); }
		//$this->imprimir($this->animalPorSorteo);
		$this->animalPorSorteo->ejecutar();	
		$this->secuencia = new $this->manejador();
		$this->secuencia->setFecha($this->fechaM);
		$this->secuencia->setLoteria($this->loteria);
		$this->secuencia->setAnimal($this->animalPorSorteo->tabla[0][0]);
		$this->secuencia->setSorteo($this->animalPorSorteo->sorteo);
		$this->secuencia->setLimite($this->limiteSecuencia);
		$this->secuencia->ejecutar();
		//echo '<pre>';
		//print_r ($this->secuencia);	
		
		
		//echo '<pre>';
		//print_r ($this->secuencia->tabla);		
		$this->configurarFuncionRetornoExtraerFila('agregarSecuencia');
		$this->extraerFila($this->secuencia->tabla);	
		$this->contador=$this->contador+1;		
	}    
    
	public function agregarSecuencia($secuencia) {
		//echo '<pre>';
		//print_r ($this->tabla);
		if ($this->actual[1] === $secuencia[1]){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"verde", "title"=>$secuencia[0]));	
		} 		
	}
    
	public function iniciarVariablesBucarAnimalPrimerSorteo() { 
		$this->animalPorSorteo->setFecha($this->ayer);	
		$this->animalPorSorteo->setSorteo(12);		
		$this->manejador = 'M_SecuenciaLimit8';		
	}
    
	public function iniciarVariablesBuscarAnimalSorteo() { 
		$this->animalPorSorteo->setFecha($this->fechaM);	
		$this->animalPorSorteo->setSorteo($this->sorteo-1);	
		$this->manejador = 'M_SecuenciaLimit';	
	}
		

}

?>
