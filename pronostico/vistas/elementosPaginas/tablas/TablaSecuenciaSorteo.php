<?php

class TablaSecuenciaSorteo extends TituloTabla
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
  public $titulo =  "Secuencia Sorteo";
  public $captionTabla =  "ecuencia";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetido", "Numero","Nombre Animal", "Fecha","Sector","Fila"));
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
		     
		$this->animalPorSorteo = new AnimalPorSorteo($this->loteria, $this->sorteo, $this->ayer);		
		$this->secuencia = new M_SecuenciaSorteo($this->fecha, $this->loteria, $this->animalPorSorteo->animal, $this->sorteo);	
		
		
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animalPorSorteo->animal).' - '.$this->getSorteo($this->sorteo);
		$this->itemsTabla=$this->secuencia->tabla;
    }     

}

?>
