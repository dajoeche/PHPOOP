<?php

class TablaCalendarioJunio extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $animal;
  public $loteria;
  public $mesAnimal;
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
  public $enero=array(
						array('2025-06-01','2025-06-02','2025-06-03','2025-06-04','2025-06-05','2025-06-06','2025-06-07'),
						array('2025-06-08','2025-06-09','2025-06-10','2025-06-11','2025-06-12','2025-06-13','2025-06-14'),
						array('2025-06-15','2025-06-16','2025-06-17','2025-06-18','2025-06-19','2025-06-20','2025-06-21'),
						array('2025-06-22','2025-06-23','2025-06-24','2025-06-25','2025-06-26','2025-06-27','2025-06-28'),
						array('2025-06-29','2025-06-30'),
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
		$this->titulo = "Junio".' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal);
		$this->calendario = new Calendario($this->animal, $this->loteria);
		$this->mesAnimal = new MesAnimal($this->enero, $this->calendario->tabla);
		
		//print_r($this->calendario->tabla);
		$this->itemsTabla=$this->mesAnimal->tabla;  
		
	}

}

?>
