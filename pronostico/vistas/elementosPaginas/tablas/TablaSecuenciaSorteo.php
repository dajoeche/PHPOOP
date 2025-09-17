<?php

class TablaSecuenciaSorteo extends TablaBaseFechaLoteriaSorteoLimite
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $animalPorSorteo;
  public $limiteSecuencia=39;
  public $loteria;
  public $animal;
  public $limite;
  public $nombreObjeto = 'P_SecuenciaSorteo';
  public $fecha;
  public $ayer;
  public $sorteo;
  public $titulo =  "Secuencia Sorteo";
  public $captionTabla =  "Secuencia";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetido", "Numero","Nombre Animal", "Fecha","Sector","Fila"));
  public $itemsTabla;
 
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo).' - '.$this->getAnimal($this->objeto->animal);
	}

}

?>
