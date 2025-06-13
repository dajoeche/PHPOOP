<?php

class TablaCalendarioFebrero extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $animal;
  public $loteria;
  public $mesAnimal;
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
  public $enero=array(
						array("",'','','','','','2025-02-01'),
						array('2025-02-02','2025-02-03','2025-02-04','2025-02-05','2025-02-06','2025-02-07','2025-02-08'),
						array('2025-02-09','2025-02-10','2025-02-11','2025-02-12','2025-02-13','2025-02-14','2025-02-15'),
						array('2025-02-16','2025-02-17','2025-02-18','2025-02-19','2025-02-20','2025-02-21','2025-02-22'),
						array('2025-02-23','2025-02-24','2025-02-25','2025-02-26','2025-02-27','2025-02-28',''),
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
		$this->titulo = "Febrero".' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal);
		$this->calendario = new Calendario($this->animal, $this->loteria);
		$this->mesAnimal = new MesAnimal($this->enero, $this->calendario->tabla);
		
		//print_r($this->calendario->tabla);
		$this->itemsTabla=$this->mesAnimal->tabla;  
		
	}

}

?>
