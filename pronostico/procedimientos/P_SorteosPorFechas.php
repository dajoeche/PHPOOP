<?php
date_default_timezone_set('America/Caracas');
class P_SorteosPorFechas extends  P_MarcarSorteos
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
  public $date;
  public $diaFecha;
  public $fila;
  public $miNumero='3';
  public $bandera='OFF';
  public $encabezadoTabla =  array(array("Sorteo"));
      
    
	public function iterarResultados($resultado) {
		$this->date=new DateTime($this->fechaM);
		$this->diaFecha = $this->date->format('d');
		if ($resultado[1] == $this->diaFecha){
			$this->tabla[$this->contador][]= array("dato"=>$resultado[1],"atributos"=>array("class"=>"rojo"));	
		} else {
			$this->tabla[$this->contador][]= $resultado[1];	
		}
			
		$this->contador = $this->contador+1;
	}    

		

}

?>
