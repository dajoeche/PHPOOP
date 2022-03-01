<?php

class TablaCompany extends TituloTabla
{

  public $etiquetaTitulo = "EtiquetaH1Html";
  public $titulo =  "A Fancy Table";
  public $captionTabla =  "Employee Data";
	public $atributosTabla =  array("id"=>"customers");
	public $encabezadoTabla =  array(array("Company", "Contact", "Country"));
	public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                                  array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
																	array("Ernst Handel","Roland Mendel", "Austria"),
																	array("Island Trading","Helen Bennett", "UK"),
																	array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
																	array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                );

}

?>
