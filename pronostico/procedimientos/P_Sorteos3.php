<?php
date_default_timezone_set('America/Caracas');
class P_Sorteos3 extends  P_MarcarSorteos
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
  public $miNumero3='1';
  public $bandera='OFF';
  public $encabezadoTabla =  array(array("Sorteo"));

	public function iterarResultados($resultado) {
		
		if ($resultado[1] === $this->animal){
			$this->tabla[$this->contador][]= array("dato"=>$resultado[1],"atributos"=>array("class"=>"amarillo"));		
		}

		if ($resultado[1] === $this->animal2){
			$this->tabla[$this->contador][]= array("dato"=>$resultado[1],"atributos"=>array("class"=>"red"));	
		}

		if ($resultado[1] === $this->animal3){
			$this->tabla[$this->contador][]= array("dato"=>$resultado[1],"atributos"=>array("class"=>"gris"));	
		}
				
		if ($resultado[1] <> $this->animal and $resultado[1] <> $this->animal2 and $resultado[1] <> $this->animal3){
			$this->tabla[$this->contador][]=$resultado[1];	
		}
			
		$this->contador = $this->contador+1;
	}    
		

}

?>
