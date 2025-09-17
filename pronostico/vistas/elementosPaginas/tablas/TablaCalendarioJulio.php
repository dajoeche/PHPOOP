<?php

class TablaCalendarioJulio extends TablaCalendarioEnero
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $animal;
  public $loteria;
  public $mesAnimal;
  public $nombreMes='Julio';
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
  public $diaMes=array(
						array('','','2025-07-01','2025-07-02','2025-07-03','2025-07-04','2025-07-05'),
						array('2025-07-06','2025-07-07','2025-07-08','2025-07-09','2025-07-10','2025-07-11','2025-07-12'),
						array('2025-07-13','2025-07-14','2025-07-15','2025-07-16','2025-07-17','2025-07-18','2025-07-19'),
						array('2025-07-20','2025-07-21','2025-07-22','2025-07-23','2025-07-24','2025-07-25','2025-07-26'),
						array('2025-07-27','2025-07-28','2025-07-29','2025-07-30','2025-07-31','',''),
					 );
  public $titulo =  "Calendario";
  public $captionTabla =  "Calendario";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Do", "Lu","Ma","Mi","Ju","Vi","Sa"));
  public $itemsTabla;
 

}

?>
