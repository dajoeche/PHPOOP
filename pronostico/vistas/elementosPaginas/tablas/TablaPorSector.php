<?php

class TablaPorSector extends TablaPorColor
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $pronosticarPorSector;
  public $loteria;
  public $nombreObjeto= 'P_PronosticarPorSector';
  public $titulo =  "Pronostico Por Sector";
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
    

}

?>
