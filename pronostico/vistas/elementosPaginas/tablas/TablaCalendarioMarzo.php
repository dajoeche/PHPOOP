<?php

class TablaCalendarioMarzo extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $animal;
  public $loteria;
  public $mesAnimal;
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
  public $enero=array(
						array('','','','','','','2025-03-01'),
						array('2025-03-02','2025-03-03','2025-0-04','2025-03-05','2025-03-06','2025-03-07','2025-03-08'),
						array('2025-03-09','2025-03-10','2025-03-11','2025-03-12','2025-03-13','2025-03-14','2025-03-15'),
						array('2025-03-16','2025-03-17','2025-03-18','2025-03-19','2025-03-20','2025-03-21','2025-03-22'),
						array('2025-03-23','2025-03-24','2025-03-25','2025-03-26','2025-03-27','2025-03-28','2025-03-29'),
						array('2025-03-30','2025-03-31','','','','',''),
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
		$this->titulo = "Marzo".' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal);
		$this->calendario = new Calendario($this->animal, $this->loteria);
		$this->mesAnimal = new MesAnimal($this->enero, $this->calendario->tabla);
		
		//print_r($this->calendario->tabla);
		$this->itemsTabla=$this->mesAnimal->tabla;  
		
	}

}

?>
