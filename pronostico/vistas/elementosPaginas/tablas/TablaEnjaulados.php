<?php

class TablaEnjaulados extends TablaBaseFechaLoteriaSorteo
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $enjaulados;
  public $loteria;
  public $sorteo;
  public $titulo =  "Enjaulados";
  public $nombreObjeto =  "P_Enjaulados";
  public $captionTabla =  "Enjaulados";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Dias Sin Salir", "Ultima Fecha","Numero","Animal","Sector"));
  public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                              array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
							  array("Ernst Handel","Roland Mendel", "Austria"),
							  array("Island Trading","Helen Bennett", "UK"),
							  array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
							  array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                );
      
   

}

?>
