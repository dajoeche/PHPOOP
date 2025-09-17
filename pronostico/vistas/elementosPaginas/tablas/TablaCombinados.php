<?php

class TablaCombinados extends TablaBaseFechaLoteriaSorteoCombinados
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH2Html";
  public $secuencia;
  public $fecha;
  public $loteria;
  public $numeroAnimal;
  public $nombreObjeto='P_Combinados';	
  public $animal;
  public $animal2;
  public $animal3;
  public $animal4;
  public $sorteos;
  public $titulo =  "Combinados";
  public $captionTabla =  "Combinados";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Combinados"));
  public $itemsTabla;

    public function guardarResultadoTabla() { 
		$this->encabezadoTabla=$this->objeto->encabezadoTabla;
		$this->titulo=$this->objeto->titulo;
		$this->itemsTabla=$this->objeto->tabla;
	}

}

?>
