<?php

class TablaCalendarioAbril extends TablaCalendarioEnero
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $calendario;
  public $animal;
  public $loteria;
  public $mesAnimal;
  public $nombreMes='Abril';
  //public $enero=array(array(1,2,3,array("dato"=>"4","atributos"=>array("class"=>"amarillo"))));
  public $diaMes=array(
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

}

?>
