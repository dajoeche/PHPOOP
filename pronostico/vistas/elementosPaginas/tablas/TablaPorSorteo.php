<?php

class TablaPorSorteo extends TablaBaseLoteriaSorteoTipo
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $porsorteo;
  public $descripcion;
  public $diasSinSalir;
  public $loteria;
  public $nombreObjeto='P_PorSorteo';
  public $sorteo;
  public $tipo;
  public $titulo =  "Por Sorteo";
  public $captionTabla =  "Por Sorteo";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array( "Numero","Nombre Animal","Suma De","Color","Posicion","Sector","Fila","Fecha","Dias Sin Salir"));
  public $itemsTabla;
   

}

?>
