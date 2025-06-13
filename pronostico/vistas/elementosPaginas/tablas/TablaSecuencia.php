<?php

class TablaSecuencia extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $loteria;
  public $animal;
  public $sorteo;
  public $titulo =  "Secuencia";
  public $captionTabla =  "ecuencia";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetido", "Numero","Nombre Animal","Sector","Fila","Fecha","Dias Sin Salir"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["fecha"])){ 
				$fecha = $_POST["fecha"]; 
				$this->loteria = $_POST["loteria"];	
				$this->animal = $_POST["animal"];	
				$this->sorteo = $_POST["sorteo"];	
		   } 
		else {
				$fecha = date("Y-m-d"); 
	            $this->loteria = 'LAC';	 
	            $this->animal = '00';        	
	            $this->sorteo = '1';        	
		     } 
		$this->titulo = $this->titulo.' '.$fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal).' - '.$this->getSorteo($this->sorteo);
		//$date = new DateTime($fecha);
		//$date->modify("-1 day");
		//$fecha = $date->format("Y-m-d");
		//$this->titulo = $this->titulo.' '.$fecha;
		$this->secuencia = new Secuencia($fecha, $this->loteria,$this->animal,$this->sorteo);
		 $this->itemsTabla=$this->secuencia->tabla;
    }     

}

?>
