<?php
date_default_timezone_set('America/Caracas');
class P_Sorteos2 extends  P_MarcarSorteos
{
  use MArray;
  use Utilitario;
  
  public $itemsTabla;
  public $animal;
  public $loteria;
  public $fechaActual = '*';
  public $fecha;
  public $fechaM;
  public $contador=0;
  public $fechaRacha;
  public $resultadoPorAnimal;
  public $resultados;
  public $tabla;
  public $fila;
  public $miNumero='3';
  public $miNumero2='2';
  public $bandera='OFF';
  public $encabezadoTabla =  array(array("Sorteo"));
 
  /*  function __construct($fecha, $loteria, $animal, $animal2) {
		$this->fecha=$fecha;
		$this->loteria=$loteria;
		$this->miNumero=$animal;
		$this->miNumero2=$animal2;
		$this->crearObjeto();		      
    }  */ 
    
	public function iterarResultados($resultado) {
		//echo '<br>'.$resultado[1].' - '.$this->miNumero.'<br>';
		if ($resultado[1] === $this->animal){
			$this->tabla[$this->contador][]= array("dato"=>$resultado[1],"atributos"=>array("class"=>"amarillo"));		
		}

		elseif ($resultado[1] == $this->animal2){
			$this->tabla[$this->contador][]= array("dato"=>$resultado[1],"atributos"=>array("class"=>"red"));	
		}
				
		elseif ($resultado[1] <> $this->animal and $resultado[1] <> $this->animal2){
			$this->tabla[$this->contador][]=$resultado[1];	
		} else {
			$this->tabla[$this->contador][]=$resultado[1];
		}
			
		$this->contador = $this->contador+1;
	}    
		

}

?>
