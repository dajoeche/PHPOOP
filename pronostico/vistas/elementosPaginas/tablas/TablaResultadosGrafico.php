<?php

class TablaResultadosGrafico extends TablaBaseFechaLoteria
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $loteria;
  public $animal;
  public $resultados;
  public $nombreObjeto='P_ResultadosGrafico';
  public $titulo =  "Grafico";
  public $captionTabla =  "Descartes";
  public $atributosTabla =  array("id"=>"tablon");
  public $encabezadoTabla =  array();
  public $itemsTabla;
 
}

?>
