<?php

class TablaCalendarioEnero extends TablaBaseLoteriaAnimalAnimal2Select
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $calendario2;
  public $numeroAnimal;
  public $nombreObjeto='P_Calendario';
  public $nombreVariableIsset='animal';
  public $animal;
  public $animal2;
  public $loteria;
  public $mesAnimal;
  public $mesAnimal2;
  public $nombreMes='Enero';
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
  public $diaMes=array(
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
 
  
    public function setTituloTabla() {
		$this->titulo = $this->objeto->titulo;
	}
	
}

?>
