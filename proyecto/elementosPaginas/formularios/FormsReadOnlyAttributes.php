<?php

class FormsReadOnlyAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input readonly attribute";
	public $parrafo = 'The readonly attribute specifies that an input field should be read-only (cannot be changed):';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CajaTextoFnameSoloLectura",
                              "SaltarLinea",
	                            "CajaTextoLname",
                              "Saltar2Lineas",
							 );

}

?>
