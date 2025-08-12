<?php
date_default_timezone_set('America/Caracas');
class Sorteos1 extends  Sorteos
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
  public $bandera='OFF';
  public $encabezadoTabla =  array(array("Sorteo"));
 
    function __construct($fecha, $loteria, $animal) {
		$this->fecha=$fecha;
		$this->loteria=$loteria;
		$this->miNumero=$animal;
		$this->crearObjeto();		      
    }  
    
	public function agregarSorteos($resultado) {
		if ($resultado[1] === $this->miNumero){
			$this->tabla[]= array($resultado[0],array("dato"=>$resultado[1],"atributos"=>array("class"=>"amarillo")));		
		} else {
			$this->tabla[]= array($resultado[0],$resultado[1]);	
		}
			
	}    
    
	public function iterarResultados($resultado) {
		if ($resultado[1] === $this->miNumero){
			$this->tabla[$this->contador][]= array("dato"=>$resultado[1],"atributos"=>array("class"=>"amarillo"));	
		} else {
			$this->tabla[$this->contador][]= $resultado[1];	
		}
			
		$this->contador = $this->contador+1;
	}    

		

}

?>
