<?php

class TablaPrueba extends MTablas
{
  public $captionTabla =  "Employee Data";
	public $encabezadoTabla =  array(array("Company", "Contact", "Country"));
	public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                                  array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
																	array("Ernst Handel","Roland Mendel", "Austria"),
																	array("Island Trading","Helen Bennett", "UK"),
																	array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
																	array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                 );

    public function __construct()
    {
		parent::__construct();
    }

}

?>
