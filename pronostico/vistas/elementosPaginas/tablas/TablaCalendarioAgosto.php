<?php

class TablaCalendarioAgosto extends TablaCalendarioEnero
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $animal;
  public $loteria;
  public $mesAnimal;
  public $nombreMes='Agosto';
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
  public $diaMes=array(
						array('','','','','','2025-08-01','2025-08-02'),
						array('2025-08-03','2025-08-04','2025-08-05','2025-08-06','2025-08-07','2025-08-08','2025-08-09'),
						array('2025-08-10','2025-08-11','2025-08-12','2025-08-13','2025-08-14','2025-08-15','2025-08-16'),
						array('2025-08-17','2025-08-18','2025-08-19','2025-08-20','2025-08-21','2025-08-22','2025-08-23'),
						array('2025-08-24','2025-08-25','2025-08-26','2025-08-27','2025-08-28','2025-08-29','2025-08-30'),
						array('2025-08-31','','','','','',''),
					 );
  public $titulo =  "Calendario";
  public $captionTabla =  "Calendario";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Do", "Lu","Ma","Mi","Ju","Vi","Sa"));
  public $itemsTabla;
 

}

?>
