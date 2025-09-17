<?php

class P_Descartes
{
  use MArray, Utilitario, MObjetoInterno;
  
  public $itemsTabla;
  public $fecha;
  public $ayer;
  public $loteria;
  public $animalHoy;
  public $limite=59;
  public $limiteDiario=9;
  public $limitePorSorteo=9;
  public $limiteSecuencia=6;
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

  public $listado=array(array('00'),
						array('0'),
						array('1','11','21','31'),
						array('2','12','22','32'),
						array('3','13','23','33'),
						array('4','14','24','34'),
						array('5','15','25','35'),
						array('6','16','26','36'),
						array('7','17','27'),
						array('8','18','28'),
						array('9','19','29'),
						array('10','20','30'),
						);
						
	public $criterios =[
						"resultados"=>["objeto"=>'M_Resultados',"funcion"=>'objetoAyerLoteria', "color"=> 'amarillo'],
						"resultadosHoy"=>["objeto"=>'M_Resultados',"funcion"=>'objetoFechaLoteria', "color"=> 'aqua'],
						"enjaulados"=>["objeto"=>'M_EnjauladosLimit',"funcion"=>'objetoAyerLoteriaSorteoLimite', "color"=> 'red'],
						"enjauladosDiario"=>["objeto"=>'M_EnjauladosDiarioLimit',"funcion"=>'objetoAyerLoteriaLimite', "color"=> 'mora'],
						"porSorteo"=>["objeto"=>'M_PorSorteoLimit',"funcion"=>'objetoAyerLoteriaSorteoLimite', "color"=> 'marron'],
						"secuencia"=>["objeto"=>'P_Secuencia',"funcion"=>'objetoFechaLoteriaSorteoLimite', "color"=> 'verde'],
						"secuenciaSorteo"=>["objeto"=>'P_SecuenciaSorteo',"funcion"=>'objetoFechaLoteriaSorteo', "color"=> 'naranja'],
					   ];
					    
    function ejecutar() {   
	    $this->setTipo('1');
		$this->obtenerDiaAnterior(); 
		$this->run("resultados"); 
		$this->run("enjaulados"); 
		$this->setLimite($this->limitePorSorteo);
		$this->run("enjauladosDiario"); 
		$this->setLimite($this->limiteDiario);
		//$this->run("porSorteo"); 
		$this->setLimite($this->limiteSecuencia);
		$this->run("secuencia");
		$this->run("secuenciaSorteo");
		//$this->run("resultadosHoy");
		//$this->run("resultados");
		$this->tabla=$this->listado; 		
    }  

	    
    public function run($indice) {	
		$this->color = $this->criterios[$indice]['color'];
		$this->resultados = $this->ejecutarObjeto($indice);
		$this->configurarFuncionRetornoIterarArray("iterarResultado");
		$this->iterarArray($this->resultados->tabla);
	
	}
	    
    public function iterarResultado($resultado) {	
		$this->animalComparar = $resultado[1];
		$this->comparar();
	
	}
	
    public function comparar() {
		
		for ($i = 0; $i < count($this->listado); $i++) {
		  for ($j = 0; $j < count($this->listado[$i]); $j++) {
			if ($this->listado[$i][$j]===$this->animalComparar){
				 $this->listado[$i][$j]= array("dato"=>$this->animalComparar,"atributos"=>array("class"=>$this->color));	
			}
		  }
		}
		
    }		

}

?>
