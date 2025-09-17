<?php

class TablaPorColor extends TablaBaseFechaLoteria
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $pronosticarPorColor;
  public $loteria;
  public $nombreObjeto= 'P_PronosticarPorColor';
  public $titulo =  "Pronostico Por Color";
  public $captionTabla =  "Pronostico Por Categoria";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetidos", "Categoria"));
  public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                              array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
							  array("Ernst Handel","Roland Mendel", "Austria"),
							  array("Island Trading","Helen Bennett", "UK"),
							  array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
							  array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                );
    
		//$fecha = $this->getAyer($fecha);
		//$this->titulo = $this->titulo.' '.$fecha.' - '.$this->getLoteria($this->loteria);
		//$fecha = date("Y-m-d"); 
		//echo $fecha;
		//$this->pronosticarPorColor = new PronosticarPorColor($fecha,$this->loteria);
		//$this->itemsTabla=$this->pronosticarPorColor->tabla;
  
    public function setTituloTabla() {
		$this->obtenerDiaAnterior(); 
		$this->titulo = $this->titulo.' '.$this->ayer.' - '.$this->getLoteria($this->loteria);
	}  

}

?>
