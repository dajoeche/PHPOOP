<?php

class TablaPorFechas extends TablaBaseFechaLoteriaTipo
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH2Html";
  public $resultado;
  public $loteria;
  public $tipo;
  public $nombreObjeto='P_PorFechas';
  public $porFechas;
  public $titulo =  "Pronostico Por Fechas De Ultima Salida";
  public $captionTabla =  "porFechas ";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Sorteo","Repeticiones", "Numero","Nombre Animal","Suma De","Color","Posicion","Ultima Fecha","Dias Sin Salir","Sector","Fila"));
  public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                              array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
							  array("Ernst Handel","Roland Mendel", "Austria"),
							  array("Island Trading","Helen Bennett", "UK"),
							  array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
							  array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                ); 
		
  
    public function setTituloTabla() {
		//$this->obtenerDiaAnterior(); 
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getTipo($this->tipo);
	} 
		 

}

?>
