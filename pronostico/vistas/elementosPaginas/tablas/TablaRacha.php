<?php
date_default_timezone_set('America/Caracas');
class TablaRacha extends TablaBaseFechaLoteria
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $loteria;
  public $fecha;
  public $nombreObjeto='P_Racha';
  public $racha;
  public $animales;
  public $sorteo;
  public $titulo =  "Racha";
  public $captionTabla =  "Racha";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Racha","Numero","Nombre Animal"));
  public $itemsTabla;


}

?>
