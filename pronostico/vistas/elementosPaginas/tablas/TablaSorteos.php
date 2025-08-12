<?php

class TablaSorteos extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $fecha;
  public $loteria;
  public $numeroAnimal;
  public $animal;
  public $animal2;
  public $animal3;
  public $sorteos;
  public $titulo =  "Sorteos";
  public $captionTabla =  "Sorteos";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Sorteo"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["fecha"])){ 
				$this->fecha = $_POST["fecha"]; 
				$this->loteria = $_POST["loteria"]; 
				$this->animal = $_POST["animal"]; 
				$this->animal2 = $_POST["animal2"]; 
				$this->animal3 = $_POST["animal3"]; 
				$this->numeroAnimal = $_POST["numeroAnimal"]; 
		   } 
		else {
				$this->fecha = date("Y-m-d");   
				$this->loteria = 'LAC';    	
				$this->animal = '00';    	
				$this->animal2 = '0';    	
				$this->animal3 = '1';    	
				$this->numeroAnimal = '4';    	
		     } 
		$this->titulo = $this->titulo.' '.$this->fecha.' '.date("H:i:s");
		
		if ($this->numeroAnimal == '1'){
			$this->sorteos = new Sorteos1($this->fecha, $this->loteria, $this->animal);
		}
		
		if ($this->numeroAnimal == '2'){
			$this->sorteos = new Sorteos2($this->fecha, $this->loteria, $this->animal, $this->animal2);
		}
		
		if ($this->numeroAnimal == '3'){
			$this->sorteos = new Sorteos3($this->fecha, $this->loteria, $this->animal, $this->animal2, $this->animal3);
		}
		
		if ($this->numeroAnimal == '4'){
			$this->sorteos = new Sorteos($this->fecha, $this->loteria);
		}
		
		$this->encabezadoTabla = $this->sorteos->encabezadoTabla;
		//echo '<pre>';
		//print_r($this->sorteos->encabezadoTabla);
		$this->itemsTabla=$this->sorteos->tabla;
    }     

}

?>
