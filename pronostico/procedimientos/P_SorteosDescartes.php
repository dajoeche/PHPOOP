<?php
date_default_timezone_set('America/Caracas');
class P_SorteosDescartes extends  P_MarcarSorteos
{
  use MArray;
  use Utilitario;
  
  public $itemsTabla;
  public $switch='OFF';
  public $animal;
  public $sorteo;
  public $animalPorSorteo;
  public $descartes;
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
  public $miNumero='3';
  public $bandera='OFF';
  public $encabezadoTabla =  array(array("Sorteo")); 
     
	public function buscarResultados() {
		$this->runObjeto('M_ResultadosCodigoSorteo');
	}   
    
	public function iterarResultados($resultado) {
		$this->actual=$resultado;
		$this->sorteo=$resultado[8];
		$this->ayer=$this->getAyer($this->fechaM);
		$this->tabla[$this->contador][$this->contadorColumna]= $this->actual[1];
		$this->descartes = new P_Descartes();	
		$this->descartes->setFecha($this->fechaM);
		$this->descartes->setLoteria($this->loteria);
		$this->descartes->setSorteo($this->sorteo);
		$this->descartes->ejecutar();
		$this->configurarFuncionRetornoExtraerFila('extraerFilaDescartes');
		$this->extraerFila($this->descartes->tabla);	
		$this->contador=$this->contador+1;		
		//echo '<pre>';
		//print_r ($this->descartes->tabla); 
	}    
    
	public function extraerFilaDescartes($filaDescartes) {
		$this->configurarFuncionRetornoIterarArray('agregarDescartes');
		$this->iterarArray($filaDescartes);
	}
    
	public function agregarDescartes($descartes) {
		//echo '<pre>';
		//print_r ($descartes);
		//echo '-----------------------------------------------------------------------';
		if ($this->actual[1] === $descartes){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"azul", "title"=>$descartes));	
		} 		
	}
		

}

?>
