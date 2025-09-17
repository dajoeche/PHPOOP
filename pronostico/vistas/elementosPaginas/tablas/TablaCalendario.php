<?php

class TablaCalendario extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $animal;
  public $loteria;
  public $mesAnimal;
  public $enero=array(
						array("",'','','2025-01-01','2025-01-02','2025-01-03','2025-01-04'),
						array('2025-01-05','2025-01-06','2025-01-07','2025-01-08','2025-01-09','2025-01-10','2025-01-11'),
						array('2025-01-12','2025-01-13','2025-01-14','2025-01-15','2025-01-16','2025-01-17','2025-01-18'),
						array('2025-01-19','2025-01-20','2025-01-21','2025-01-22','2025-01-23','2025-01-24','2025-01-25'),
						array('2025-01-26','2025-01-27','2025-01-28','2025-01-29','2025-01-30','2025-01-31',''),
					 );
  public $titulo =  "Calendario";
  public $captionTabla =  "Calendario";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Do", "Lu","Ma","Mi","Ju","Vi","Sa"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["animal"])){ 
				$this->animal = $_POST["animal"];	
				$this->loteria = $_POST["loteria"];	
		   } 
		else {
	            $this->animal = '00';	         	
	            $this->loteria = 'LAC';	         	
		     } 
		//$this->titulo = $this->titulo.' '.$this->loteria;
		$this->titulo = "Enero".' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal);
		$this->calendario = new M_Calendario($this->animal, $this->loteria);
		$this->mesAnimal = new M_MesAnimal($this->enero, $this->calendario->tabla);
		
		//print_r($this->calendario->tabla);
		$this->itemsTabla=$this->mesAnimal->tabla;  
		
	}

}

?>
