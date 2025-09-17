<?php

class TablaCruce extends TablaBaseFecha
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $cruce;
  public $lac;
  public $lgr;
  public $sp;
  public $rla;
  public $lai;
  public $ltr;
  public $caz;
  public $tabla;
  public $sorteo;
  public $nombreObjeto='P_Cruce';
  public $titulo =  "Cruce";
  public $captionTabla =  "Cruce";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Sorteo", "Lotto Activo", "La Granjita","Selva Plus","Ruleta Activa","Lotto Activo Internacional","Lotto Rey","Cazaloton"));
  public $itemsTabla;
   

}

?>
