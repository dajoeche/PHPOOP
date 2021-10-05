<?php

class FormsDateField extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Date Field";
  public $complemento = 'input type="date"';
	public $parrafo = 'The * is used for input fields that should contain a date.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "DateFieldInput",
							 );

}

?>
