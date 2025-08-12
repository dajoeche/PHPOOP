<?php

class ResultadosGrafico
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
  public $animal;
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
  public $repetido = 'gris';
  public $triple = 'mora';
  public $colorFilaUno = 'LightSalmon';
  public $columna=array();
  public $bandera='OFF';
  public $listado=array(
						array(
								array("dato"=>"","atributos"=>array("class"=>'blanco')),
								array("dato"=>"1","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"2","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"3","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"4","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"5","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"6","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"7","atributos"=>array("class"=>'salmonClaro')),
							),
						array(
								array("dato"=>"A","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"35","atributos"=>array("class"=>'negro')),
								array("dato"=>"14","atributos"=>array("class"=>'rojo')),
								array("dato"=>"2","atributos"=>array("class"=>'negro')),
								array("dato"=>"0","atributos"=>array("class"=>'verde')),
								array("dato"=>"28","atributos"=>array("class"=>'negro')),
								array("dato"=>"9","atributos"=>array("class"=>'rojo')),
								array("dato"=>"26","atributos"=>array("class"=>'negro')),
								
							 ),
						array(
								array("dato"=>"B","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"30","atributos"=>array("class"=>'rojo')),
								array("dato"=>"11","atributos"=>array("class"=>'negro')),
								array("dato"=>"7","atributos"=>array("class"=>'rojo')),
								array("dato"=>"20","atributos"=>array("class"=>'negro')),
								array("dato"=>"32","atributos"=>array("class"=>'rojo')),
								array("dato"=>"17","atributos"=>array("class"=>'negro')),
								
							 ),
						array(
								array("dato"=>"C","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"5","atributos"=>array("class"=>'rojo')),
								array("dato"=>"22","atributos"=>array("class"=>'negro')),
								array("dato"=>"34","atributos"=>array("class"=>'rojo')),
								array("dato"=>"15","atributos"=>array("class"=>'negro')),
								array("dato"=>"3","atributos"=>array("class"=>'rojo')),
								array("dato"=>"24","atributos"=>array("class"=>'negro')),
								
							 ),
						array(
								array("dato"=>"D","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"36","atributos"=>array("class"=>'rojo')),
								array("dato"=>"13","atributos"=>array("class"=>'negro')),
								array("dato"=>"1","atributos"=>array("class"=>'rojo')),
								array("dato"=>"00","atributos"=>array("class"=>'verde')),
								array("dato"=>"27","atributos"=>array("class"=>'rojo')),
								array("dato"=>"10","atributos"=>array("class"=>'negro')),
								array("dato"=>"25","atributos"=>array("class"=>'rojo')),
								
							 ),
						array(
								array("dato"=>"E","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"29","atributos"=>array("class"=>'negro')),
								array("dato"=>"12","atributos"=>array("class"=>'rojo')),
								array("dato"=>"8","atributos"=>array("class"=>'negro')),
								array("dato"=>"19","atributos"=>array("class"=>'rojo')),
								array("dato"=>"31","atributos"=>array("class"=>'negro')),
								array("dato"=>"18","atributos"=>array("class"=>'rojo')),
								
							 ),
						array(
								array("dato"=>"F","atributos"=>array("class"=>'salmonClaro')),
								array("dato"=>"6","atributos"=>array("class"=>'negro')),
								array("dato"=>"21","atributos"=>array("class"=>'rojo')),
								array("dato"=>"33","atributos"=>array("class"=>'negro')),
								array("dato"=>"16","atributos"=>array("class"=>'rojo')),
								array("dato"=>"4","atributos"=>array("class"=>'negro')),
								array("dato"=>"23","atributos"=>array("class"=>'rojo')),
								
							 ),

						);
 
    function __construct($fecha, $loteria) { 
		$this->fecha=$fecha;
		$this->loteria=$loteria;
		//$this->manana=$manana;
		//$this->crearObjeto();	
		//echo "<pre>";	
		//print_r($this->listado);   
		 
		$this->resultados = new Resultados($this->fecha, $this->loteria);
		$this->configurarFuncionRetornoIterarArray("iterarResultado");
		$this->iterarArray($this->resultados->tabla);	
			
 
		$this->tabla=$this->listado; 		
    }  

    
    public function iterarResultado($resultado) {
	 
		//echo $resultado[1]."<br>";	
		$this->animal = $resultado[1];
		$this->comparar();
	
	}
	
    public function comparar() {
		
		for ($i = 1; $i < count($this->listado); $i++) {
			  //echo "Elemento en la posición " . $i . ": " . $this->listado[$i] . "<br>";
			  /*echo '<pre>';
			  print_r($this->listado[$i]);
			  echo '</pre>';*/
		  for ($j = 1; $j < count($this->listado[$i]); $j++) {
			//echo $this->listado[$i][$j].'<br>';
			  //echo '<pre>';
			  //print_r($this->listado[$i][$j]);
			  //echo '</pre>';
			if ($this->listado[$i][$j]["dato"]===$this->animal and $this->listado[$i][$j]["atributos"]['class']<>'amarillo' and $this->listado[$i][$j]["atributos"]['class']<>'gris'){
				 $this->listado[$i][$j]= array("dato"=>$this->animal,"atributos"=>array("class"=>$this->color));	
			} elseif ($this->listado[$i][$j]["dato"]===$this->animal and $this->listado[$i][$j]["atributos"]['class']=='amarillo'){
				 $this->listado[$i][$j]= array("dato"=>$this->animal,"atributos"=>array("class"=>$this->repetido));
			} elseif ($this->listado[$i][$j]["dato"]===$this->animal and $this->listado[$i][$j]["atributos"]['class']=='gris'){
				 $this->listado[$i][$j]= array("dato"=>$this->animal,"atributos"=>array("class"=>$this->triple));
			} 
		  }
		}
		
    }		

}

?>
