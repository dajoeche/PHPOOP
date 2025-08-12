<?php

class Descartes
{
  use MArray, Utilitario;
  
  public $itemsTabla;
  public $fecha;
  public $ayer;
  public $loteria;
  public $animalHoy;
  public $limite=59;
  public $limiteDiario=9;
  public $limitePorSorteo=9;
  public $limiteSecuencia=12;
  public $animalComparar;
  public $animalPorSorteo;
  public $animal;
  public $secuencia;
  public $resultadosHoy;
  public $secuenciaSorteo;
  public $resultados;
  public $porSorteo;
  public $sorteo;
  public $enjaulados;
  public $enjauladosDiario;
  public $salio="OFF";
  public $contador=0;
  public $tabla;
  public $fila;
  public $color = 'amarillo';
  public $columna=array();
  public $bandera='OFF';
  public $listado=array(array('1','11','21','31','00'),
						array('2','12','22','32','0'),
						array('3','13','23','33'),
						array('4','14','24','34'),
						array('5','15','25','35'),
						array('6','16','26','36'),
						array('7','17','27'),
						array('8','18','28'),
						array('9','19','29'),
						array('10','20','30'),
						);
 
    function __construct($fecha, $loteria, $sorteo) { 
		$this->fecha=$fecha;
		$this->loteria=$loteria;
		$this->sorteo=$sorteo;
		//$this->manana=$manana;
		//$this->crearObjeto();	
		//echo "<pre>";	
		//print_r($this->listado);   
		
		$this->ayer=$this->getAyer($this->fecha); 
		$this->resultados = new Resultados($this->ayer, $this->loteria);
		$this->configurarFuncionRetornoIterarArray("iterarResultado");
		$this->iterarArray($this->resultados->tabla);		

		//echo $this->ayer;
		$this->color='red';
		$this->enjaulados = new EnjauladosLimit($this->ayer, $this->loteria,$this->sorteo,$this->limite);	
		$this->configurarFuncionRetornoIterarArray("iterarResultado");
		$this->iterarArray($this->enjaulados->tabla);	
		
		$this->color='mora';	
		$this->enjauladosDiario = new EnjauladosDiarioLimit($this->ayer, $this->loteria,$this->sorteo,$this->limiteDiario);	
		$this->iterarArray($this->enjauladosDiario->tabla);	
		
		$this->color='marron';	
		$this->porSorteo = new PorSorteoLimit($this->ayer, $this->loteria,$this->sorteo,$this->limitePorSorteo);	
		//$this->iterarArray($this->porSorteo->tabla);	
		
		$this->color='verde';	
		if ($this->sorteo==='1'){
			$this->animalPorSorteo = new AnimalPorSorteo($this->loteria, '12', $this->ayer);
			$this->secuencia = new SecuenciaLimit8($this->fecha, $this->loteria, $this->animalPorSorteo->animal, '12', $this->limiteSecuencia);
			
		} elseif($this->sorteo>'1' and $this->sorteo<'13') {	
			$this->animalPorSorteo = new AnimalPorSorteo($this->loteria, $this->sorteo-1, $this->fecha);		
			$this->secuencia = new SecuenciaLimit($this->fecha, $this->loteria, $this->animalPorSorteo->animal, $this->sorteo-1, $this->limiteSecuencia);	
		}
		
		$this->iterarArray($this->secuencia->tabla);
	
		
		$this->color='aqua';
		$this->resultadosHoy = new Resultados($this->fecha, $this->loteria);
		$this->configurarFuncionRetornoIterarArray("iterarResultado");
		//$this->iterarArray($this->resultadosHoy->tabla);		
		
		$this->color='naranja';
		$this->animalPorSorteo = new AnimalPorSorteo($this->loteria, $this->sorteo, $this->ayer);
		$this->secuenciaSorteo = new M_SecuenciaSorteo($this->fecha, $this->loteria, $this->animalPorSorteo->animal, $this->sorteo);
		$this->configurarFuncionRetornoIterarArray("iterarResultado");
		$this->iterarArray($this->secuenciaSorteo->tabla);		
			
		//echo "<pre>";	
		//print_r($this->secuenciaSorteo->tabla); 
		$this->tabla=$this->listado; 		
    }  

    
    public function iterarResultado($resultado) {
	 
		//echo $resultado[1]."<br>";	
		$this->animalComparar = $resultado[1];
		$this->comparar();
	
	}
	
    public function comparar() {
		
		for ($i = 0; $i < count($this->listado); $i++) {
			  //echo "Elemento en la posición " . $i . ": " . $this->listado[$i] . "<br>";
			  /*echo '<pre>';
			  print_r($this->listado[$i]);
			  echo '</pre>';*/
		  for ($j = 0; $j < count($this->listado[$i]); $j++) {
			//echo $this->listado[$i][$j].'<br>';
			if ($this->listado[$i][$j]===$this->animalComparar){
				 $this->listado[$i][$j]= array("dato"=>$this->animalComparar,"atributos"=>array("class"=>$this->color));	
			}
		  }
		}
		
    }		

}

?>
