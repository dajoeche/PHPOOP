<?php

class TablaCalendarioEnero extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $calendario2;
  public $numeroAnimal;
  public $animal;
  public $animal2;
  public $loteria;
  public $mesAnimal;
  public $mesAnimal2;
  public $nombreMes='Enero';
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
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
		
		//echo "<pre>";
		//print_r($_POST);

		if (isset($_POST["animal"])){ 
					$this->animal = $_POST["animal"];	
					$this->animal2 = $_POST["animal2"];	
					$this->loteria = $_POST["loteria"];	
					$this->loteria = $_POST["loteria"];	
					$this->numeroAnimal = $_POST["numeroAnimal"];	
		} 
		else {
				$this->animal = '00';	         	
				$this->animal2 = '0';	         	
				$this->loteria = 'LAC';	         	
				$this->numeroAnimal = '1';	         	
			 } 
				 		
		if ($this->numeroAnimal=='2'){
			
			$this->titulo = $this->nombreMes.' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal).' / '.$this->getAnimal($this->animal2);
			$this->calendario2 = new Calendario2($this->animal, $this->animal2, $this->loteria);
			$this->mesAnimal2 = new MesAnimal2($this->enero, $this->calendario2->tabla, $this->animal, $this->animal2);	
			$this->itemsTabla=$this->mesAnimal2->tabla;  	
			//echo "<pre>";
			//echo print_r($this->mesAnimal2->tabla);		

		} elseif ($this->numeroAnimal=='1') {

			$this->titulo = $this->nombreMes.' - '.$this->getLoteria($this->loteria).' - '.$this->getAnimal($this->animal);
			$this->calendario = new Calendario($this->animal, $this->loteria);
			$this->mesAnimal = new MesAnimal($this->enero, $this->calendario->tabla);	
			$this->itemsTabla=$this->mesAnimal->tabla;  
		} elseif ($this->numeroAnimal=='5') {

			$this->titulo = $this->nombreMes.' - '.$this->getLoteria($this->loteria).' - Salida Por Fechas';
			$this->calendario = new CalendarioFecha($this->loteria);
			$this->mesAnimal = new MesAnimal($this->enero, $this->calendario->tabla);	
			$this->itemsTabla=$this->mesAnimal->tabla;  
		}
		
	}

}

?>
