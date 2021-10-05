<?php

class FormsCheckboxes extends TituloParrafoFormulario
{

  public $titulo = "Checkboxes";
	public $parrafo = 'The input type="checkbox" defines a checkbox:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
	                            "CheckboxBike",
                              "CheckboxCar",
	                            "CheckboxBoat",
                              "Saltar2Lineas",
							 );

}

?>
