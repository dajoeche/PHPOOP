<?php

class FormsTimeField extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Show a Time Input Control";
  public $complemento = 'input type="time"';
	public $parrafo = 'The * allows the user to select a time (no time zone):<br><br>';
  public $parrafo2 = "If the browser supports it, a time picker pops up when entering the input field.";
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "TimeFieldInput",



							 );

}

?>
