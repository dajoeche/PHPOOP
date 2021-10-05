<?php

class FormsMonth extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Month Field";
  public $complemento = 'input type="month"';
	public $parrafo = 'The * allows the user to select a month and year.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "MonthFieldInput",

							 );

}

?>
