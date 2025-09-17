<?php

class TablaResultados extends TablaBaseFechaLoteria
{
  use Utilitario ;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $resultados;
  public $loteria;
  public $nombreObjeto='M_Resultados';
  public $titulo =  "Resultados";
  public $captionTabla =  "Resultados";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Sorteo", "Numero","Nombre Animal","Suma De","Color","Posicion","Sector","Fila"));
  public $itemsTabla;
 


}

?>
