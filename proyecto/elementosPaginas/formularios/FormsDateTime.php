<?php

class FormsDateTime extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Local Date Field";
  public $complemento = 'input type="datetime-local"';
	public $parrafo = 'The * specifies a date and time input field, with no time zone.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "DateTimeInput",
							 );

}

?>
