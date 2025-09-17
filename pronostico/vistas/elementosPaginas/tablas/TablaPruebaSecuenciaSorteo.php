<?php

class TablaPruebaSecuenciaSorteo extends TablaBaseFechaLoteriaSorteo
{
	use Utilitario;

  public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $pruebaSecuenciaSorteo;
  public $limiteSecuencia=39;
  public $loteria;
  public $animal;
  public $fecha;
  public $nombreObjeto='P_pruebaSecuenciaSorteo';
  public $ayer;
  public $sorteo;
  public $titulo =  "Prueba Secuencia Sorteo";
  public $captionTabla =  "Secuencia";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("","Numero","Nombre Animal", "Sector", "Fila", "Color", "Suma De", "Fecha"));
  public $itemsTabla;
		
}

?>
