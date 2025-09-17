<?php

class TablaPorDecena extends TablaPorColor
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $pronosticarPorDecena;
  public $loteria;
  public $nombreObjeto= 'P_PronosticarPorDecena';
  public $titulo =  "Pronostico Por Decena";
  public $captionTabla =  "Pronostico Por Categoria";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetidos", "Decena"));
  public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                              array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
							  array("Ernst Handel","Roland Mendel", "Austria"),
							  array("Island Trading","Helen Bennett", "UK"),
							  array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
							  array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                );
       

}

?>
