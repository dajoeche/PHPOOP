<?php

class TablaPorFila extends TablaPorColor
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $pronosticarPorFila;
  public $loteria;
  public $nombreObjeto= 'P_PronosticarPorFila';
  public $titulo =  "Pronostico Por Fila";
  public $captionTabla =  "Pronostico Por Categoria";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetidos", "Fila"));
  public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                              array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
							  array("Ernst Handel","Roland Mendel", "Austria"),
							  array("Island Trading","Helen Bennett", "UK"),
							  array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
							  array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                );  

}

?>
