<?php

class FormsSearchField extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Search Field";
  public $complemento = 'input type="search"';
	public $parrafo = 'The * is used for search fields (behaves like a regular text field):';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "SearchFieldInput",
							 );

}

?>
