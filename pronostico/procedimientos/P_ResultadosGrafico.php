<?php

class P_ResultadosGrafico
{
  use MArray, Utilitario, MObjetoInterno;

  public $resultados;  
  public $tabla;
  public $repetido;
  public $color = 'amarillo';

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
	public $criterios =[
						"buscarResultados"=>["objeto"=>'M_Resultados',"funcion"=>'objetoFechaLoteria'],
					   ];

    function ejecutar() {
		$this->resultados = $this->ejecutarObjeto("buscarResultados");
		$this->configurarFuncionRetornoIterarArray("iterarResultado");
		$this->iterarArray($this->resultados->tabla);
		$this->tabla=$this->listado;
	} 

    public function iterarResultado($resultado) {	
		$this->animal = $resultado[1];
		$this->comparar();
	
	}
	
    public function comparar() {
		
		for ($i = 1; $i < count($this->listado); $i++) {
		  for ($j = 1; $j < count($this->listado[$i]); $j++) {
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
