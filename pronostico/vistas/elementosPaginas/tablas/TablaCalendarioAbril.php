<?php

class TablaCalendarioAbril extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $animal;
  public $loteria;
  public $mesAnimal;
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
  public $enero=array(
						array('','','2025-04-01','2025-04-02','2025-04-03','2025-0-04','2025-04-05'),
						array('2025-04-06','2025-04-07','2025-04-08','2025-04-09','2025-04-10','2025-04-11','2025-04-12',),
						array('2025-04-13','2025-04-14','2025-04-15','2025-04-16','2025-04-17','2025-04-18','2025-04-19'),
						array('2025-04-20','2025-04-21','2025-04-22','2025-04-23','2025-04-24','2025-04-25','2025-04-26'),
						array('2025-04-27','2025-04-28','2025-04-29','2025-04-30','2025-04-31','',''),
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
		//echo $this->getAnimal($this->animal)." ".$this->animal."  ";
		$this->titulo = "Abril".' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal);
		$this->calendario = new Calendario($this->animal, $this->loteria);
		$this->mesAnimal = new MesAnimal($this->enero, $this->calendario->tabla);
		
		//print_r($this->calendario->tabla);
		$this->itemsTabla=$this->mesAnimal->tabla;  
		
	}

}

?>
