<?php

class FormsURLField extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Display a URL Input Field";
  public $complemento = 'input type="url"';
	public $parrafo = 'The * is used for input fields that should contain a URL address:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "URLFieldInput",



							 );

}

?>
