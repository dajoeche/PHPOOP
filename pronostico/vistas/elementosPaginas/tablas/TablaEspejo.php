<?php

class TablaEspejo extends TablaBaseFechaLoteriaSorteoAnimal
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $fecha;
  public $espejo;
  public $nombreObjeto='M_Espejo';
  public $loteria;
  public $sorteo;
  public $resultado;
  public $animal;
  public $titulo =  "Espejo";
  public $captionTabla =  "Espejo";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetidos", "Numero","Animal","Categoria","Fila"));
  public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                              array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
							  array("Ernst Handel","Roland Mendel", "Austria"),
							  array("Island Trading","Helen Bennett", "UK"),
							  array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
							  array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                );    

}

?>
