<?php

class FormsDisabledAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input disabled attribute";
	public $parrafo = 'The disabled attribute specifies that an input field should be disabled (unusable and un-clickable):';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CajaTextoFnameDisabled",
                              "SaltarLinea",
	                            "CajaTextoLname",
                              "Saltar2Lineas",
							 );

}

?>
