<?php

class FormsCheckboxesInput extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Checkboxes";
  public $complemento = 'input type="checkbox"';
	public $parrafo = 'The * defines a checkbox:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CheckboxBike",
                              "CheckboxCar",
	                            "CheckboxBoat",
                              "Saltar2Lineas",
							 );

}

?>
