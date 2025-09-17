<?php

class TablaSorteos extends TablaBaseFechaLoteriaAnimal1234NumeroAnimal
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $fecha;
  public $loteria;
  public $numeroAnimal;
  public $nombreObjeto='P_Sorteos';	
  public $animal;
  public $animal2;
  public $animal3;
  public $animal4;
  public $sorteos;
  public $titulo =  "Sorteos";
  public $captionTabla =  "Sorteos";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Sorteo"));
  public $itemsTabla;

    public function guardarResultadoTabla() { 
		$this->encabezadoTabla=$this->objeto->encabezadoTabla;
		$this->titulo=$this->objeto->titulo;
		$this->itemsTabla=$this->objeto->tabla;
	}

}

?>
