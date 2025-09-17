<?php
date_default_timezone_set('America/Caracas');
class P_SorteosMasSalen extends P_MarcarSorteos
{
  use MArray;
  use Utilitario;
  
  public $itemsTabla;
  public $switch='OFF';
  public $animal;
  public $sorteo;
  public $animalPorSorteo;
  public $masSalen;
  public $loteria;
  public $limite=8;
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
		$this->masSalen = new M_MasSalenLimite();
		$this->masSalen->setLoteria($this->loteria);
		$this->masSalen->setFecha($this->fechaM);
		$this->masSalen->setSorteo($this->sorteo);	
		$this->masSalen->setLimite($this->limite);	
		$this->masSalen->ejecutar();	
		//echo '<pre>';
		//print_r ($this->secuencia->tabla);		
		$this->configurarFuncionRetornoExtraerFila('agregarMasSalen');
		$this->extraerFila($this->masSalen->tabla);	
		$this->contador=$this->contador+1;		
	}    
    
	public function agregarMasSalen($masSalen) {
		//echo '<pre>';
		//print_r ($this->tabla);
		if ($this->actual[1] === $masSalen[1]){
			$this->tabla[$this->contador][$this->contadorColumna]= array("dato"=>$this->actual[1],"atributos"=>array("class"=>"rojo", "title"=>$masSalen[0]));	
		} 		
	}
		

}

?>
