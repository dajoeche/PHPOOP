<?php
date_default_timezone_set('America/Caracas');
class Sorteos2 extends  Sorteos
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
 
    function __construct($fecha, $loteria, $animal, $animal2) {
		$this->fecha=$fecha;
		$this->loteria=$loteria;
		$this->miNumero=$animal;
		$this->miNumero2=$animal2;
		$this->crearObjeto();		      
    }  
    
	public function agregarSorteos($resultado) {
		if ($resultado[1] === $this->miNumero){
			$this->tabla[]= array($resultado[0],array("dato"=>$resultado[1],"atributos"=>array("class"=>"amarillo")));		
		}

		if ($resultado[1] === $this->miNumero2){
			$this->tabla[]= array($resultado[0],array("dato"=>$resultado[1],"atributos"=>array("class"=>"red")));	
		}
				
		if ($resultado[1] <> $this->miNumero and $resultado[1] <> $this->miNumero2){
			$this->tabla[]= array($resultado[0],$resultado[1]);	
		}
			
	}    
    
	public function iterarResultados($resultado) {
		if ($resultado[1] === $this->miNumero){
			$this->tabla[$this->contador][]= array("dato"=>$resultado[1],"atributos"=>array("class"=>"amarillo"));		
		}

		if ($resultado[1] === $this->miNumero2){
			$this->tabla[$this->contador][]= array("dato"=>$resultado[1],"atributos"=>array("class"=>"red"));	
		}
				
		if ($resultado[1] <> $this->miNumero and $resultado[1] <> $this->miNumero2){
			$this->tabla[$this->contador][]=$resultado[1];	
		}
			
		$this->contador = $this->contador+1;
	}    
		

}

?>
