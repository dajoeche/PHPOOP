<?php

class TablaSecuencia extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $animalPorSorteo;
  public $limiteSecuencia=39;
  public $loteria;
  public $animal;
  public $fecha;
  public $ayer;
  public $sorteo;
  public $titulo =  "Secuencia";
  public $captionTabla =  "ecuencia";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetido", "Numero","Nombre Animal","Sector","Fila"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["fecha"])){ 
				$this->fecha = $_POST["fecha"]; 
				$this->loteria = $_POST["loteria"];	
				//$this->animal = $_POST["animal"];	
				$this->sorteo = $_POST["sorteo"];	
		   } 
		else {
				$this->fecha = date("Y-m-d"); 
	            $this->loteria = 'LAC';	 
	            //$this->animal = '00';        	
	            $this->sorteo = '1';        	
		     } 
		     
		$this->ayer=$this->getAyer($this->fecha);      
		     
		if ($this->sorteo==='1'){
			$this->animalPorSorteo = new AnimalPorSorteo($this->loteria, '12', $this->ayer);
			$this->secuencia = new SecuenciaLimit8($this->fecha, $this->loteria, $this->animalPorSorteo->animal, '12', $this->limiteSecuencia);
			
		} elseif($this->sorteo>'1' and $this->sorteo<'13') {	
			$this->animalPorSorteo = new AnimalPorSorteo($this->loteria, $this->sorteo-1, $this->fecha);		
			$this->secuencia = new SecuenciaLimit($this->fecha, $this->loteria, $this->animalPorSorteo->animal, $this->sorteo-1, $this->limiteSecuencia);	
		}
		
		
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animalPorSorteo->animal).' - '.$this->getSorteo($this->sorteo);
		//$date = new DateTime($fecha);
		//$date->modify("-1 day");
		//$fecha = $date->format("Y-m-d");
		//$this->titulo = $this->titulo.' '.$fecha;
		//$this->secuencia = new Secuencia($fecha, $this->loteria,$this->animal,$this->sorteo);
		 $this->itemsTabla=$this->secuencia->tabla;
    }     

}

?>
