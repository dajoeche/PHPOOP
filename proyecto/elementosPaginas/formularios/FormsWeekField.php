<?php

class FormsWeekField  extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Display a Week Input Control";
  public $complemento = 'input type="week"';
	public $parrafo = 'The * allows the user to select a week and year.';
	public $parrafo2 = 'If the browser supports it, a date picker pops up when entering the input field.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "WeekFieldInput",



							 );

}

?>
