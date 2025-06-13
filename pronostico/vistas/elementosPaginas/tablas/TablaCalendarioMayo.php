<?php

class TablaCalendarioMayo extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $animal;
  public $loteria;
  public $mesAnimal;
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
  public $enero=array(
						array('','','','','2025-05-01','2025-05-02','2025-05-03'),
						array('2025-05-04','2025-05-05','2025-05-06','2025-05-07','2025-05-08','2025-05-09','2025-05-10'),
						array('2025-05-11','2025-05-12','2025-05-13','2025-05-14','2025-05-15','2025-05-16','2025-05-17'),
						array('2025-05-18','2025-05-19','2025-05-20','2025-05-21','2025-05-22','2025-05-23','2025-05-24'),
						array('2025-05-25','2025-05-26','2025-05-27','2025-05-28','2025-05-29','2025-05-30','2025-05-31'),
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
		$this->titulo = "Mayo".' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal);
		$this->calendario = new Calendario($this->animal, $this->loteria);
		$this->mesAnimal = new MesAnimal($this->enero, $this->calendario->tabla);
		
		//print_r($this->calendario->tabla);
		$this->itemsTabla=$this->mesAnimal->tabla;  
		
	}

}

?>
