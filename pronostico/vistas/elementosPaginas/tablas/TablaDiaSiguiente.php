<?php

class TablaDiaSiguiente extends TablaBaseLoteriaSorteo
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $resultados;
  public $resultadosManana;
  public $loteria='LAC';
  public $fechaInicio;
  public $nombreObjeto='M_DiaSiguiente';
  public $fecha;
  public $manana;
  public $sorteo;
  public $comparar;
  public $titulo =  "Dia Siguiente";
  public $captionTabla =  "Dia Siguiente";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("","Numero","Animal", "Fecha"));
  public $itemsTabla;
     

}

?>
